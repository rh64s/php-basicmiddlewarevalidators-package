<?php

namespace BasicValidators\Validators;

use BasicValidators\Validator\AbstractValidator;

class RequireValidator extends AbstractValidator
{

    protected string $message = 'Field :field is required';

    public function rule(): bool
    {
        return !empty($this->value) || $this->value !== 0 || $this->value !== false;
    }
}
