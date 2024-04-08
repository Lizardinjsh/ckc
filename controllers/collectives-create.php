<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);


if ($_SERVER["REQUEST_METHOD"] == "pasakumi"){
    $query = " INSERT INTO collectives (deju_kolektivi, apraksts) 
                VALUE (:deju_kolektivi, :apraksts);";
$params = [
    ":deju_kolektivi" => $_POST["deju_kolektivi"],
    ":apraksts" => $_POST["apraksts"]
];
$db->execute($query, $params);
header('location: /collectives');
die();
}




$title = "create a post";
require "views/collectives-create.view.php";