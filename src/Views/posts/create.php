<div class="page-header">
    <h1>New Post</h1>
    <p>Share something with the world.</p>
</div>

<?php if (isset($flash)) { ?>
    <div class="flash flash-<?= $flashType ?? 'success' ?>"><?= htmlspecialchars($flash, ENT_QUOTES, 'UTF-8') ?></div>
<?php } ?>

<form method="POST" action="/posts/create" class="form">
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" placeholder="Your name" required>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="8" placeholder="Write something..." required></textarea>
    </div>

    <button type="submit" class="btn">Create Post</button>
</form>

<a href="/posts/index" class="back-link">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
    Back to posts
</a>
