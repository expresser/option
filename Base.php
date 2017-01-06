<?php

namespace Expresser\Option;

use Exception;
use Expresser\Support\Fluent;

abstract class Base extends Fluent
{
    public $ID = 'option';

    public static function registerHooks($class)
    {
        add_action('admin_menu', [$class, 'registerSettings'], -PHP_INT_MAX);
    }

    public static function registerSettings()
    {
        throw new Exception('A settings page must override registerSettings.');
    }
}
