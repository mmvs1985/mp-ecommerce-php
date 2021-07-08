<?php

$input = @file_get_contents("php://input");

file_put_contents(
    'notificaciones.log',
    $input . PHP_EOL. PHP_EOL,
    FILE_APPEND
);

http_response_code(201);
?>