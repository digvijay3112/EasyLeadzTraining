<?php
require 'vendor/autoload.php';
$client= new MongoDB\Client;
$companydb= $client->companydb;
$empcollection= $companydb->empcollection;
// $updateResult=$empcollection->updateOne( 
//     ['age'=>'38'],
//     ['$set'=>['age'=>'36']] 
// );
// printf("Matched %d documents \n", $updateResult->getMatchedCount());
// printf("Modified %d documents \n", $updateResult->getModifiedCount());
$updateResult=$empcollection->updateMany(
    ['skill'=>'AI'],
    ['$set'=>['manager'=>'Amit Rawat']]
);
printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n",$updateResult->getModifiedCount());
?>