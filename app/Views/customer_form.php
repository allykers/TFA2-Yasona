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
        $isEdit = isset($customer['id']);
        $formAction = $isEdit
            ? base_url('customers/update/' . $customer['id'])
            : base_url('customers/create');
    ?>

    <form action="<?= $formAction ?>" method="post">

        <label for="full_name">Full Name</label>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name', $customer['full_name'] ?? '') ?>"
        >

        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            value="<?= old('email', $customer['email'] ?? '') ?>"
        >

        <label for="phone">Phone</label>
        <input
            type="text"
            id="phone"
            name="phone"
            value="<?= old('phone', $customer['phone'] ?? '') ?>"
        >

        <button type="submit">Save Customer</button>
        <a class="cancel-button" href="<?= base_url('/customers') ?>">Cancel</a>

    </form>
</main>

</body>
</html>