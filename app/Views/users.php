<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
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
    <h1>User Accounts</h1>

    <a class="add-button" href="<?= base_url('/users/new') ?>">
        Add New User
    </a>

    <?php if (session('success')): ?>
        <p class="success-message"><?= esc(session('success')) ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>Avatar</th>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Date Created</th>
            <th>Action</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <?php
                $avatar = !empty($user['avatar'])
                    ? base_url('uploads/users/' . $user['avatar'])
                    : base_url('uploads/placeholder.svg');
            ?>

            <tr>
                <td>
                    <img class="avatar" src="<?= $avatar ?>" alt="User avatar">
                </td>
                <td><?= esc($user['id']) ?></td>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
                <td>
                    <a href="<?= base_url('users/edit/' . $user['id']) ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

</body>
</html>