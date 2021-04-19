<?php
namespace techstore\Classes\Validation;


class Required implements ValidationRule
{
    
    public function check(string $inputName, $value)
    {
        if (empty($value)) {
            return "$inputName is required";
        }
        return false;
    }


}