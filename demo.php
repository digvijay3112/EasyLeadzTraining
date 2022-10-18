<?php
require "vendor/autoload.php";
$client = new MongoDB\Client;
//Query ON Collections
//$companydb=$client->companydb;
// $result2=$companydb->dropCollection('mycollection');
// var_dump($reasult2);
// foreach($companydb->listCollections() as $collection){
// var_dump($collection);
// }
// $result1=$companydb->createCollection('empcollection');
// var_dump($result1);
// $result1=$companydb->createCollection('mycollection');
// var_dump($result1);
//Query ON Databases
// $companydb=$client->newdb;
// $result2=$companydb->createCollection("newcollection");
// var_dump($result2);
// foreach($client->listDatabases() as $db)
// {
//     var_dump($db);
// }
// $result3=$client->dropDatabases('newdb');
// var_dump($result3);
?>