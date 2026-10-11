<!DOCTYPE html>
<html>
<head>
    <title><?= esc($formTitle) ?></title>
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

<main class="form-container">
    <h1><?= esc($formTitle) ?></h1>

    <?php $errors = session('errors') ?? []; ?>

    <?php if (!empty($errors)): ?>
        <div class="error-message">
            <?php foreach ($errors as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php
        $isEdit = isset($user['id']);

        $formAction = $isEdit
            ? base_url('users/update/' . $user['id'])
            : base_url('users/create');
    ?>

    <form action="<?= $formAction ?>" method="post" enctype="multipart/form-data">

        <label for="username">Username</label>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username', $user['username'] ?? '') ?>"
            required
        >

        <label for="full_name">Full Name</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name', $user['full_name'] ?? '') ?>"
            required
        >

        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            <?= $isEdit ? '' : 'required' ?>
        >

        <?php if ($isEdit): ?>
            <small>
                Leave the password blank if you do not want to change it.
            </small>
        <?php endif; ?>

        <?php if ($isEdit): ?>
            <label for="avatar">Profile Picture</label>

            <input
                type="file"
                id="avatar"
                name="avatar"
                accept=".jpg,.jpeg,.png"
            >

            <small>
                JPG or PNG only. Maximum file size: 2MB.
            </small>
        <?php endif; ?>

        <button type="submit">Save User</button>

        <a class="cancel-button" href="<?= base_url('/users') ?>">
            Cancel
        </a>

    </form>
</main>

</body>
</html>