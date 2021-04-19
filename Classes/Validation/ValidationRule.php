<?php
namespace techstore\Classes\Validation;


interface ValidationRule
{
    public function check(string $inputName, $value);

    
};