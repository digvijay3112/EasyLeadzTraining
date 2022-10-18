<?php
require 'vendor/autoload.php';
$client= new MongoDB\Client;
$companydb= $client->companydb;
$empcollection= $companydb->empcollection;
// $document=$empcollection->findOne(
//     ['_id'=>1]
// );
// var_dump($document);
// $documenlist=$empcollection->find(
//     ['skill'=>'AI']
// );
// foreach($documenlist as $doc)
// {
//     var_dump($doc);
// }
$documenlist=$empcollection->find(

);
foreach($documenlist as $doc)
{
    var_dump($doc);
}
?>
