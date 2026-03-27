<?php

namespace BasicMiddlewares;

function getMiddlewares(): array
{
    return include "middlewares/config.php";
}

function getValidators(): array
{
    return include "validators/config.php";
}