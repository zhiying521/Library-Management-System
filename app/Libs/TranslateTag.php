<?php

namespace app\Libs;

class TranslateTag
{
    function __construct(
        private readonly string $key,
        private readonly array $replace = []
    ) {
    }


    public function __toString(): string
    {
        return trans($this->key, $this->replace);
    }
}
