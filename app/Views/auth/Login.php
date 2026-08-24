<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">

</head>

<body>

<div class="login-container">

    <div class="login-card">

        <h2 class="text-center mb-4">Employee Payroll System</h2>

        <h5 class="text-center text-secondary mb-4">HR Login</h5>

        <?php if(session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('authenticate') ?>" method="post">

            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Username</label>

                <input
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="Enter Username"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                    required>
            </div>

            <button class="btn btn-primary w-100">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html>