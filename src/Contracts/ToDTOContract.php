<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\DTO\Contracts;

use Fresns\DTO\DTO;

/**
 * Interface ToDTOConTract.
 */
interface ToDTOContract
{
    public function toDTO(): DTO;
}
