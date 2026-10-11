<!DOCTYPE html>
<html>
<head>
    <title>Login - Bag POS System</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<nav>
    <a href="<?= base_url('/login') ?>">POS Login</a>
</nav>

<main class="login-container">
    <h1>Bag POS Login</h1>

    <?php if (session('error')): ?>
        <p class="error-message">
            <?= esc(session('error')) ?>
        </p>
    <?php endif; ?>

    <?php if (session('success')): ?>
        <p class="success-message">
            <?= esc(session('success')) ?>
        </p>
    <?php endif; ?>

    <form action="<?= base_url('/login') ?>" method="post">

        <label for="username">Username</label>

        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username') ?>"
            required
        >

        <label for="password">Password</label>

        <input
            type="password"
            id="password"
            name="password"
            required
        >

        <button type="submit">Log In</button>

    </form>
</main>

</body>
</html>