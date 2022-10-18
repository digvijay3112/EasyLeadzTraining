<?php
require 'vendor/autoload.php';
$client= new MongoDB\Client;
//insert Document
$companydb=$client->companydb;
$empcollection=$companydb->empcollection;
$insertOneResult= $empcollection->insertOne(
['_id'=>'8','name'=>'shivalik','age'=>'20','skill'=>'AI']
);
print_r("Inserted %d dociments",$insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());
// $insertManyResult=$empcollection->insertMany([
//      ['_id'=>'2','name'=>'rahul','age'=>'28','skill'=>'PHP'],
//      ['_id'=>'3','name'=>'kapil','age'=>'30','skill'=>'Android'],
//      ['_id'=>'4','name'=>'varun','age'=>'32','skill'=>'Ruby'],
//      ['_id'=>'5','name'=>'abhishek','age'=>'24','skill'=>'ReactJS'],
//      ['_id'=>'6','name'=>'aditya','age'=>'34','skill'=>'NodeJS'],
//      ['_id'=>'7','name'=>'tarun','age'=>'36','skill'=>'AI']
//     ]);
// print_r("Inserted %d dociments",$insertManyResult->getInsertedCount());
// var_dump($insertManyResult->getInsertedIds());
?>