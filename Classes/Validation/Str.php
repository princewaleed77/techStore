<?php
namespace techstore\Classes\Validation;


class Str implements ValidationRule
{
    public function check(string $inputName, $value)
    {
        if (! is_string($value)) {
            return "$inputName must be string";
        }
        return false;
    }

}