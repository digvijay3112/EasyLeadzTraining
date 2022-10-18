<?php
require 'vendor/autoload.php';
$client= new MongoDB\Client;
$companydb= $client->companydb;
$empcollection= $companydb->empcollection;
$documenlist=$empcollection->find(
    [],
    [
        'limit'=>5,
        'skip' =>2,
        'sort'=>['age'=>-1]
    ]
);
foreach($documenlist as $doc)
{
    var_dump($doc);
}
?>
