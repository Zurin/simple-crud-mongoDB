<?php
$url = "mongodb://admin:admin123@ds029595.mlab.com:29595/rino1db";
$connection = new MongoClient($url);
 
/**
 * Select database named "test"
 */ 
$db = $connection->rino1db;
?>