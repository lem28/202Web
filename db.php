#!usr/bin/php
<?php

  $db = new mysqli("localhost","root","herecomesthesnow45","it202");

  if ($db->connect_errno > 0)
  {
    echo __file__.__line__." ERROR: ".$db->connect_error.PHP_EOL;
    exit(-1);
  }
  echo "Connected to database".PHP_EOL;

  $query = "select * from mojave";
  $results = $db->query($query);
  print_r($results);
  $db->close();

?>