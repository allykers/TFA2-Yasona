<!DOCTYPE html>
<html>
<head>
    <title>About - Bag POS System</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<nav>
    <?php if (session('isLoggedIn')): ?>
        <a href="<?= base_url('/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
        <a href="<?= base_url('/users') ?>">User Accounts</a>
        <a href="<?= base_url('/logout') ?>">Logout</a>
    <?php else: ?>
        <a href="<?= base_url('/login') ?>">Login</a>
    <?php endif; ?>
</nav>

<main class="about-content">
    <h1>About the Bag POS System</h1>

    <p>
        The Bag POS System is a simple sales management application
        created for a bag shop.
    </p>

    <p>
        It helps manage products, customer accounts, user accounts,
        and sales transactions.
    </p>

    <p>
        This project is built using CodeIgniter 4 and follows the
        Model-View-Controller pattern.
    </p>
</main>

</body>
</html>