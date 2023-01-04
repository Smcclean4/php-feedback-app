<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'sid');
  define('DB_PASS', '@genTzer0');
  define('DB_NAME', 'php_dev');

  // create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // check connection
  if($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
  }

  echo 'Connected!!';