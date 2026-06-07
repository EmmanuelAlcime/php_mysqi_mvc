<?php
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $path);
$controller = $segments[0] ?? '';
$action     = $segments[1] ?? '';

$titles = [
    'pages' => [
        'home'    => 'Home',
        'about'   => 'About',
        'contact' => 'Contact',
        'error'   => 'Error',
    ],
    'posts' => [
        'index'  => 'Posts',
        'show'   => 'Post',
        'create' => 'New Post',
    ],
];

if ($controller === '' || ($controller === 'pages' && $action === '')) {
    $pageTitle = 'Home';
} else {
    $pageTitle = $titles[$controller][$action] ?? 'PHP MVC';
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — PHP MVC</title>
<link rel="stylesheet" href="/assets/css/style.css">
