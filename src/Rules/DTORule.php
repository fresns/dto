<?php

namespace Fresns\DTO\Rules;

use Fresns\DTO\DTO;
use Illuminate\Contracts\Validation\Rule;

class DTORule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value instanceof DTO;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be DTO.';
    }
}
