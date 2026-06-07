<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        $first_name = 'Emmanuel';
        $last_name  = 'Show';
        require __DIR__ . '/../Views/pages/home.php';
    }

    public function about()
    {
        $user = 'emmanuel';
        require __DIR__ . '/../Views/pages/about.php';
    }

    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name    = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
            $email   = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
            $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

            $flash = 'Thanks ' . $name . '! Your message has been sent.';
        }

        require __DIR__ . '/../Views/pages/contact.php';
    }

    public function error()
    {
        require __DIR__ . '/../Views/pages/error.php';
    }
}
