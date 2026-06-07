<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        require __DIR__ . '/../Views/posts/index.php';
    }

    public function show()
    {
        $id = $_GET['id'] ?? null;

        if ($id === null || !ctype_digit($id)) {
            $this->error();
            return;
        }

        $post = Post::find($id);

        if ($post === null) {
            $this->error();
            return;
        }

        require __DIR__ . '/../Views/posts/show.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $author  = htmlspecialchars($_POST['author'] ?? '', ENT_QUOTES, 'UTF-8');
            $content = htmlspecialchars($_POST['content'] ?? '', ENT_QUOTES, 'UTF-8');

            if ($author !== '' && $content !== '') {
                $id = Post::create($author, $content);
                $flash = $id !== false
                    ? 'Post created successfully!'
                    : 'Failed to save post. Please try again.';
                $flashType = $id !== false ? 'success' : 'error';
            } else {
                $flash = 'Both author and content are required.';
                $flashType = 'error';
            }
        }

        require __DIR__ . '/../Views/posts/create.php';
    }

    private function error()
    {
        $controller = new PagesController();
        $controller->error();
    }
}
