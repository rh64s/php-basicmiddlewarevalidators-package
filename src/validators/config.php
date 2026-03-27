<?php
namespace BasicValidators\Validators;

return [
    'required' => \Validators\RequireValidator::class,
    'unique' => \Validators\UniqueValidator::class,
    'exists' => \Validators\ValueExistsValidator::class,
    'max' => \Validators\MaxSymbolsValidator::class,
    'min' => \Validators\MinSymbolsValidator::class,
    'email' => \Validators\EmailValidator::class,
    'phone' => \Validators\PhoneValidator::class,
    'regex' => \Validators\RawRegexValidation::class,
    'mime' => \Validators\MimeTypesValidator::class
];