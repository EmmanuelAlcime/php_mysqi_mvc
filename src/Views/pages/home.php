<section class="hero">
    <h1>Welcome to PHP MVC</h1>
    <p>A lightweight, hand-rolled MVC framework built with PHP and MySQL. Simple, fast, and open.</p>
    <a href="/posts/index" class="btn">
        Browse Posts
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
    </a>
</section>

<div class="content-card" style="margin:0 auto">
    <p>Hello, <strong><?= htmlspecialchars($first_name . ' ' . $last_name, ENT_QUOTES, 'UTF-8') ?></strong>!</p>
    <p style="margin-top:1rem">You successfully landed on the home page. Congrats!</p>
</div>
