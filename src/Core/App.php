<?php

namespace App\Core;

use RuntimeException;

class App
{
    public function run()
    {
        $router = new Router();

        ob_start();

        try {
            $router->dispatch();
        } catch (RuntimeException $e) {
            ob_clean();
            error_log($e->getMessage());
            require __DIR__ . '/../Views/pages/error.php';
        }

        $content = ob_get_clean();

        require __DIR__ . '/../Views/layout.php';
    }
}
