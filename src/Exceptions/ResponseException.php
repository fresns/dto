<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Exceptions;

use Fresns\DTO\Traits\ResponseTrait;

class ResponseException extends \Exception
{
    use ResponseTrait;

    public function render()
    {
        // if (!\request()->wantJsons()) {
        //     return view('error.30000', $this);
        // }

        return $this->failure(20000, $this->getMessage());
    }
}
