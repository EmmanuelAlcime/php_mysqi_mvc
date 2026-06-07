<div class="page-header">
    <h1>Contact</h1>
    <p>We'd love to hear from you.</p>
</div>

<?php if (isset($flash)) { ?>
    <div class="flash flash-success"><?= htmlspecialchars($flash, ENT_QUOTES, 'UTF-8') ?></div>
<?php } ?>

<form method="POST" action="/pages/contact" class="form">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn">Send Message</button>
</form>
