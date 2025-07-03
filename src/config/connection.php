<?php

include __DIR__ . "/db.php";

function get_connection_to_db()
{
  $dbname = MySQL['dbname'];
  $port = MySQL['port'];
  $host = MySQL['host'];
  $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
  $pdo = new PDO($dsn, MySQL['username'], MySQL['password']);
  return $pdo;
};
