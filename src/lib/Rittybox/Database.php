<?php

namespace Rittybox;

class Database {
  public static $Database;

  public static function connect ($connectionString, $username, $password) {
    self::$Database = new \PDO($connectionString, $username, $password);
    self::$Database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  }

  public static function close () {
    self::$Database = null;
  }
}