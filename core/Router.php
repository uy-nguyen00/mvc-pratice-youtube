<?php

/**
 * @package app\core
 */

namespace app\core;

class Router {
    public Request $request;
    protected array $routes = [
        'get' => [],
        'post' => [],
    ];

    /**
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }


    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        echo '<pre>';
        var_dump($path);
        echo '</pre>';
        exit;
    }
}