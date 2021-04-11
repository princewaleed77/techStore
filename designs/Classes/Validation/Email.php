<?php

class Email implements ValidationRule
{
    public function check(string $inputName, $value)
    {
        if (!filter_var($value , FILTER_VALIDATE_EMAIL)) {
            return "$inputName is not valid email";
        }
        return false;
    }

}