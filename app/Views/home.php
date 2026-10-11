<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Bag POS System</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<nav>
    <a href="<?= base_url('/dashboard') ?>">Dashboard</a>
    <a href="<?= base_url('/about') ?>">About</a>
    <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
    <a href="<?= base_url('/users') ?>">User Accounts</a>
    <a href="<?= base_url('/logout') ?>">Logout</a>
</nav>

<main class="dashboard-container">
    <h1>Bag POS Dashboard</h1>

    <p>
        Welcome, <?= esc(session('full_name')) ?>!
    </p>

    <section class="dashboard-cards">

        <div class="dashboard-card">
            <h2>Products</h2>
            <p>Manage bag products and inventory.</p>
            <span>Coming in the next technical activity</span>
        </div>

        <div class="dashboard-card">
            <h2>Customer Accounts</h2>
            <p>View and manage customer records.</p>
            <a href="<?= base_url('/customers') ?>">
                View Customers
            </a>
        </div>

        <div class="dashboard-card">
            <h2>User Accounts</h2>
            <p>View and manage staff accounts.</p>
            <a href="<?= base_url('/users') ?>">
                View Users
            </a>
        </div>

    </section>
</main>

</body>
</html>