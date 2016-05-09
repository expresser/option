<?php namespace Expresser\Option;

use Exception;

abstract class Base extends \Expresser\Support\Fluent {

  public $ID = 'option';

  public static function registerHooks($class) {

    static::registerSettings();
  }

  public static function registerSettings() {

    throw new Exception('A settings page must override registerSettings.');
  }
}
