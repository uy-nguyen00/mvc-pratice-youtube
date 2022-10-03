<?php

echo "Hello World!";

$app = new Application();

$app->router->get('/', function () {
    return 'Hello World!';
});

$app->run();
