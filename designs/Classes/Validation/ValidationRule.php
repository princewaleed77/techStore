<?php

interface ValidationRule
{
    public function check(string $inputName, $value);

    
};