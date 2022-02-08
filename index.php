<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include 'vendor/autoload.php';

use GoogleCrawlers\SearchEngine;

$client = new SearchEngine();
$client->setEngine("google.ae");
$results = $client->search(['properties in dubai','properties in pakistan', 'properties in germany'], 50);

echo "<pre>";
print_r($results);