<?php 
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Principal";
});

$app->get('/hello', function () {
    echo "Hello";
});

$app->get('/json', function () {
    echo json_encode(
        array(
            "data" => date('l jS \of F Y h:i:s A')
        )
    );
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>