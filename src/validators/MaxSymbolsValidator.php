<?php

namespace Validators;

use BasicFilter\Validator\AbstractValidator;

class MaxSymbolsValidator extends AbstractValidator
{

    protected string $message = 'Field :field is too long';

    public function rule(): bool
    {

        return (bool)strlen($this->value) <= (int) $this->args[0];
    }
}
