<?php
namespace BasicValidators\Validators;

return [
    // fix paths for validators
    'required' => \BasicValidators\Validators\RequireValidator::class,
    'unique' => \BasicValidators\Validators\UniqueValidator::class,
    'exists' => \BasicValidators\Validators\ValueExistsValidator::class,
    'max' => \BasicValidators\Validators\MaxSymbolsValidator::class,
    'min' => \BasicValidators\Validators\MinSymbolsValidator::class,
    'email' => \BasicValidators\Validators\EmailValidator::class,
    'phone' => \BasicValidators\Validators\PhoneValidator::class,
    'regex' => \BasicValidators\Validators\RawRegexValidation::class,
    'mime' => \BasicValidators\Validators\MimeTypesValidator::class
];