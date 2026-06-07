<div class="page-header">
    <h1>Posts</h1>
    <p>Browse all posts.</p>
</div>

<?php if (empty($posts)) { ?>
    <div class="empty-state">
        <span class="emoji">📝</span>
        <p>No posts yet. Be the first to create one!</p>
        <a href="/posts/create" class="btn">Create Post</a>
    </div>
<?php } else { ?>
    <ul class="post-list">
        <?php foreach ($posts as $post) { ?>
            <li>
                <span class="author"><?= htmlspecialchars($post->author, ENT_QUOTES, 'UTF-8') ?></span>
                <a href="/posts/show/<?= (int)$post->id ?>" class="link">
                    See Content
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </li>
        <?php } ?>
    </ul>
<?php } ?>
