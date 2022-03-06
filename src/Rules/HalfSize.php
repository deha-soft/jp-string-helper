<?php

namespace DehaSoft\JpStringHelper\Rules;

use Illuminate\Contracts\Validation\Rule;

class HalfSize implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !!preg_match("/^[ｧ-ﾝ]+$/", $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be half size.';
    }
}