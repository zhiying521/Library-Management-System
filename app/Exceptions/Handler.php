<?php

namespace App\Exceptions;

use App\Http\Response\Error;
use App\Http\Response\Json;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;
use Throwable;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    /**
     * 处理所有异常
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Throwable $e
     * @return Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $e): Response
    {
        if ($e instanceof ModelNotFoundException) {
            if (method_exists($e->getModel(), 'notExistResponse')) {
                return $e->getModel()::notExistResponse();
            }
            return new Error(
                trans('global_not_found', [
                    'name' => $e->getModel()::getModelName()
                ])
            );
        }

        if ($e instanceof TooManyRequestsHttpException) {
            return new Error($e->getMessage(), 502);
        }
        if ($e instanceof TokenBlacklistedException || $e instanceof TokenExpiredException) {
            return new Error($e->getMessage(), 402);
        }

        return parent::render($request, $e);
    }
    /**
     * 参数验证错误的异常，我们需要返回 501 的 http code 和一句错误信息
     * @param Request $request
     * @param ValidationException $e
     * @return Json
     */
    protected function convertValidationExceptionToResponse(
        ValidationException $e,
                            $request
    ): \App\Http\Response\Response {
        $error_array = [];
        foreach ($e->errors() as $key => $errors) {
            $error_array[] = implode(' | ', $errors);
        }
        return new Error(implode(' | ', $error_array), 501, $e->errors());
    }


}
