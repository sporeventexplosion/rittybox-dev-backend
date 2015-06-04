<?php

namespace Rittybox;

class Autoloader
{
  private $dir;
  public function __construct($dir = null)
  {
    if (is_null($dir)) {
      $dir = dirname(__FILE__).'/..';
    }
    $this->dir = $dir;
  }


  public static function register($dir = null)
  {
    ini_set('unserialize_callback_func', 'spl_autoload_call');
    spl_autoload_register(array(new self($dir), 'autoload'));
  }


  public function autoload($class)
  {
    if (0 !== strpos($class, 'Rittybox')) {
      return;
    }
    if (file_exists($file = $this->dir.'/'.str_replace('\\', '/', $class).'.php')) {
      require $file;
    }
  }

  public static function setDatabase ($database) {
    $Database = $database;
  }
}