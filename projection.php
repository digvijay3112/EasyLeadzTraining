<?php
require 'vendor/autoload.php';
$client= new MongoDB\Client;
$companydb= $client->companydb;
$empcollection= $companydb->empcollection;
$documenlist=$empcollection->find(
    ['skill'=>'AI'],
    ['projection'=>['name'=>1,'_id'=>0]]
);
foreach($documenlist as $doc)
{
    var_dump($doc);
}
?>