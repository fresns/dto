<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Exceptions;

class ResponseException extends \Exception
{
    public function render()
    {
        return response()->json([
            'code' => 20000,
            'message' => $this->getMessage(),
            'data' => null,
        ]);
    }
}
