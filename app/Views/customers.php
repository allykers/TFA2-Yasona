<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
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

<main>
    <h1>Customer Accounts</h1>

    <a class="add-button" href="<?= base_url('/customers/new') ?>">
        Add New Customer
    </a>

    <?php if (session('success')): ?>
        <p class="success-message"><?= esc(session('success')) ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date Created</th>
            <th>Action</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['id']) ?></td>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
                <td><?= esc($customer['created_at']) ?></td>
                <td>
                    <a href="<?= base_url('customers/edit/' . $customer['id']) ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

</body>
</html>