<?php
require "Database.php";
$config = require "config.php";


if(isset($_GET["id"]))
{
    $query = "DELETE FROM pasakumi WHERE id = $_GET[id];";
    $params = [];
    $db = new Database($config);
    $events = $db->execute($query, $params)->fetchALL();
}
else
{
    $query = "SELECT * FROM pasakumi"; 
    $params = [];
}

$query = "SELECT * FROM pasakumi"; 
$params = [];
$db = new Database($config);
$events = $db->execute($query, $params)->fetchALL();

require "views/collectives-delete.view.php";