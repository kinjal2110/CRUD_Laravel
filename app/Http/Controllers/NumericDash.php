<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NumericDash implements Rule
{
    private $message = "The :attribute format is invalid.";
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($digitsWithoutDash, $regex)
    {
        $this->digitsWithoutDash = $digitsWithoutDash;
        $this->regex = $regex;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (strlen(preg_replace('/[^0-9]/', '', $value)) !== $this->digitsWithoutDash) {
            $this->message = "The :attribute must include {$this->digitsWithoutDash} digits.";
            return false;
        }
        if (!preg_match($this->regex, $value)) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}