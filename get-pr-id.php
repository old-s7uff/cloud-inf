<?php
header("Content-Type: application/json; charset=UTF-8");
require __DIR__ . '/ovh-api/vendor/autoload.php';
use \Ovh\Api;

// Informations about your application
$applicationKey = "XXX";
$applicationSecret = "XXX";
$consumer_key = "XX";

// Information about API and rights asked
$endpoint = 'ovh-ca';
$conn = new Api(    $applicationKey,
                    $applicationSecret,
                    $endpoint,
                    $consumer_key);
$get = $conn->get('/cloud/project');
$myJSON = json_encode($get);
echo $myJSON;
?>
