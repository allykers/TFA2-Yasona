<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Bag POS System</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('/about') ?>">About</a>
    <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
    <a href="<?= base_url('/users') ?>">User Accounts</a>
</nav>

<main>
    <h1>Dashboard</h1>

    <p>Welcome to the Bag Point-of-Sale System.</p>

    <section class="dashboard-cards">

        <div class="dashboard-card">
            <h2>Products</h2>
            <p>Manage bag products and inventory.</p>
            <span></span>
        </div>

        <div class="dashboard-card">
            <h2>Customer Accounts</h2>
            <p>View the registered customers of the shop.</p>
            <a href="<?= base_url('/customers') ?>">View Customers</a>
        </div>

        <div class="dashboard-card">
            <h2>User Accounts</h2>
            <p>View the staff and user accounts.</p>
            <a href="<?= base_url('/users') ?>">View Users</a>
        </div>

    </section>
</main>

</body>
</html>