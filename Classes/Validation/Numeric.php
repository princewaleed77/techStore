<?php

namespace techstore\Classes\Validation;


class Numeric implements ValidationRule
{
    public function check(string $inputName, $value)
    {
        if (!is_numeric($value)) {
            return "$inputName must be numeric";
        }
        return false;
    }

}