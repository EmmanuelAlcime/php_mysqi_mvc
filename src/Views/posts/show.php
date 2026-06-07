<div class="page-header">
    <h1><?= htmlspecialchars($post->author, ENT_QUOTES, 'UTF-8') ?></h1>
    <p>Post #<?= (int)$post->id ?></p>
</div>

<div class="post-detail">
    <p><?= nl2br(htmlspecialchars($post->content, ENT_QUOTES, 'UTF-8')) ?></p>
</div>

<a href="/posts/index" class="back-link">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
    Back to posts
</a>
