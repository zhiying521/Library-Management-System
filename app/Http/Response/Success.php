<?php

namespace App\Http\Response;

class Success extends Json
{
    /**
     * @param array $data
     */
    public function __construct($data = [])
    {
        parent::__construct([
            'code' => 200,
            'message' => 'OK',
            'data' => $data
        ]);
    }
}
