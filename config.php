<?php

/**
  * Configuration for database connection
  *
  */

$host       = "localhost";
$username   = "group1_su21";
$password   = "summer2021";
$dbname     = "group1_su21_scratchpad"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
              