<?php
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $path);
$currentController = $segments[0] ?? 'pages';
$currentAction     = $segments[1] ?? 'home';

// Root URL maps to pages/home
if ($currentController === '' || ($currentController === 'pages' && $currentAction === '')) {
    $currentController = 'pages';
    $currentAction = 'home';
}
?>
<nav>
    <a href="/pages/home"   class="<?= $currentController === 'pages' && $currentAction === 'home'    ? 'active' : '' ?>">Home</a>
    <a href="/pages/about"  class="<?= $currentController === 'pages' && $currentAction === 'about'   ? 'active' : '' ?>">About</a>
    <a href="/pages/contact" class="<?= $currentController === 'pages' && $currentAction === 'contact' ? 'active' : '' ?>">Contact</a>
    <a href="/posts/index"  class="<?= $currentController === 'posts' && $currentAction === 'index'   ? 'active' : '' ?>">Posts</a>
    <a href="/posts/create" class="<?= $currentController === 'posts' && $currentAction === 'create'  ? 'active' : '' ?>">New Post</a>
</nav>
