<?php

namespace App\Models;

use App\Core\Database;

class Post
{
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content)
    {
        $this->id      = $id;
        $this->author  = $author;
        $this->content = $content;
    }

    public static function all()
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM posts');

        if ($req === false) {
            return $list;
        }

        while ($post = $req->fetch_assoc()) {
            $list[] = new Post($post['id'], $post['author'], $post['content']);
        }

        return $list;
    }

    public static function find($id)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare('SELECT * FROM posts WHERE id = ?');

        if ($stmt === false) {
            return null;
        }

        $stmt->bind_param('i', $id);

        if (!$stmt->execute()) {
            return null;
        }

        $result = $stmt->get_result();

        if ($result === false) {
            return null;
        }

        $post = $result->fetch_assoc();

        if ($post === null) {
            return null;
        }

        return new Post($post['id'], $post['author'], $post['content']);
    }

    public static function create($author, $content)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare('INSERT INTO posts (author, content) VALUES (?, ?)');

        if ($stmt === false) {
            return false;
        }

        $stmt->bind_param('ss', $author, $content);

        if (!$stmt->execute()) {
            return false;
        }

        return $stmt->insert_id;
    }
}
