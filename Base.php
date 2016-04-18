<?php namespace Expresser\Option;

use Exception;

abstract class Base extends \Expresser\Support\Fluent {

  public $ID = 'option';

  public static function register() {

    static::registerSettings();

    parent::register();
  }

  protected static function registerSettings() {

    throw new Exception('A settings page must override registerSettings.');
  }
}
