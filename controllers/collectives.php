<?php
require "Database.php";


$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM collectives";
$params = [];
$kolektivi = $db
          ->execute($query, $params)
          ->fetchAll();
require "views/collectives.view.php";