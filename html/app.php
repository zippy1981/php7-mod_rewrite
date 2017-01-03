<?php
declare(strict_types=1);

require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php');

header('Content-Type: application/json');

$ret = [
    '_SERVER' => $_SERVER,
];

echo json_encode($ret, JSON_PRETTY_PRINT);