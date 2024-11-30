<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return static function (array $context) {
    var_dump("Было автоматически задеплоено!");
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
