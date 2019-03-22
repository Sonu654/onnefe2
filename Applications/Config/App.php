<?php

class App {

    private $controller='ONNEFE';
    private $method = 'Index';
    private $prams = [];

    function __construct() {
        $url = $this->url();
        $this->getContoller($url[0]);
        unset($url[0]);
        require_once('Applications/Controller/' . $this->controller . '.php');
        $this->controller = new $this->controller();
        if (isset($url[1]))
            $this->getMethod($url[1]);
        unset($url[1]);
        $this->prams = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->prams);
    }

    function getContoller($controller) {
        if (file_exists('Applications/Controller/' . $controller . '.php')) {
            $this->controller = $controller;
        } else {
            $this->controller = 'Error';
        }
    }

    function getMethod($method) {
        if (method_exists($this->controller, $method))
            $this->method = $method;
        else
            $this->method = 'Error';
    }

    function url() {
        return $url = explode('/', $_GET['url']);
    }

}
