<?php
require 'vendor/autoload.php';
$client= new MongoDB\Client;
$companydb=$client->companydb;
$empcollection= $companydb->empcollection;
$deleteResult= $empcollection->deleteMany(
    ['skill'=>'AI']
);
printf("Deleted %d documents", $deleteResult->getDeletedCount());
?>
