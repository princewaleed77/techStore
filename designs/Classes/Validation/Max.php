<?php

class Max implements ValidationRule
{
    public function check(string $inputName, $value)
    {
        if (strlen($value) > 255) {
            return " maximum length of $inputName must not exceed 255 chars.";
        }
        return false;
    }

}