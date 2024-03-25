<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Traits;

use Fresns\DTO\Exceptions\ResponseException;

trait ResponseTrait
{
    public function failure(?string $message = null)
    {
        $code = 10000;
        $message = $message ?: 'DTO Unknown Error';

        if (request()->wantsJson()) {
            throw new ResponseException($message);
        }

        return [
            'code' => $code,
            'message' => $message,
            'data' => null,
        ];
    }
}
