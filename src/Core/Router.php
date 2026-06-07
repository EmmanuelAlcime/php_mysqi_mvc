<?php

namespace App\Core;

use App\Controllers\PagesController;
use App\Controllers\PostsController;

class Router
{
    private $controllers = [
        'pages' => ['home', 'about', 'contact', 'error'],
        'posts' => ['index', 'show', 'create'],
    ];

    public function dispatch()
    {
        $url = $_GET['url'] ?? '';
        $parts = explode('/', trim($url, '/'));

        $controller = !empty($parts[0]) ? $parts[0] : 'pages';
        $action     = !empty($parts[1]) ? $parts[1] : 'home';
        $params     = array_slice($parts, 2);

        if (isset($params[0])) {
            $_GET['id'] = $params[0];
        }

        if ($this->isValid($controller, $action)) {
            $this->call($controller, $action);
        } else {
            $this->call('pages', 'error');
        }
    }

    private function isValid($controller, $action)
    {
        return isset($this->controllers[$controller])
            && in_array($action, $this->controllers[$controller]);
    }

    private function call($controller, $action)
    {
        switch ($controller) {
            case 'pages':
                $instance = new PagesController();
                break;
            case 'posts':
                $instance = new PostsController();
                break;
            default:
                $instance = new PagesController();
                $action = 'error';
                break;
        }

        $instance->{$action}();
    }
}
