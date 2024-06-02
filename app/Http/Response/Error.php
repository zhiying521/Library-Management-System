<?php

namespace App\Http\Response;

class Error extends Json
{
    /**
     * 5xx
     * 502 = 请求次数过多
     * 501 = 请求数据错误
     * 500 = 服务器错误
     *
     * 4xx
     * 401 = 未授权
     * 402 = 跳转到登陆
     * 403 = 权限不足、禁止访问
     * 404 = 资源不存在
     *
     * 3xx = 重定向
     * 302 = 临时重定向
     * 306 = 客户端版本升级
     *
     * 2xx
     * 200 = 成功
     *
     * @param string $message
     * @param array $data
     * @param int $code
     */
    public function __construct(string $message = '', int $code = 500, array $data = [])
    {
        parent::__construct([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }
}
