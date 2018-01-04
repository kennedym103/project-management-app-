<?php
//new PHP Data Object //This allows PHP to interact with a database
try{
  $dsn = "mysql:host=localhost;dbname=timetracker;port=3306"; $username = "root"; $password = "root";
  //(For local use, PHPMyAdmin doesn't use a password.)
  $db = new PDO($dsn, $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo $e->getMessage();
  exit;
}
