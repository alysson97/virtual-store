<?php

  class DB{
    public static function connect(){
      $host = 'localhost';
      $user = 'root';
      $password = '';
      $db = 'virtual-store';

      return new PDO("mysql:host={$host};dbname={$db};charset=UTF8;", $user, $password);
    }
  }
  
  