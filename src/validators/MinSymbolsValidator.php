<?php

namespace Validators;

use BasicFilter\Validator\AbstractValidator;

class MinSymbolsValidator extends AbstractValidator
{

    protected string $message = 'Field :field is too short';

    public function rule(): bool
    {

        return (bool)strlen($this->value) >= (int) $this->args[0];
    }
}