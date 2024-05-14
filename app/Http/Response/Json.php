<?php

namespace App\Http\Response;

use App\Libs\TranslateTag;
use ArrayAccess;
use Illuminate\Contracts\Support\Arrayable;

class Json extends Response
{
    /**
     * @param array $data
    */
    public function __construct($data = [])
    {
        $data['data'] = $this->convertTranslateTag($data['data']);
        parent::__construct($data);
    }

    /**
     * @param array|Arrayable|ArrayAccess $result
     * @return array|Arrayable|ArrayAccess
     */
    protected function convertTranslateTag(array|Arrayable|ArrayAccess $result): array|Arrayable|ArrayAccess
    {
        foreach ($result as &$value) {
            if (is_array($value)) {
                $value = $this->convertTranslateTag($value);
            } else {
                if ($value instanceof TranslateTag) {
                    $value = $value->__toString();
                }
            }
        }

        return $result;
    }
}
