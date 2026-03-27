<?php


namespace BasicValidators\Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use BasicValidators\Validator\AbstractValidator;

class ValueExistsValidator extends AbstractValidator
{
    protected string $message = "The :attribute should exists.";

    public function rule(): bool
    {
        return (bool)Capsule::table($this->args[0])
            ->where($this->args[1], $this->value)->count();
    }
}