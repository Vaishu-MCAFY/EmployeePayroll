<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:#f5f7fa;
        }

        .hero{
            background:linear-gradient(90deg,#0d6efd,#4dabf7);
            color:white;
            padding:80px 0;
        }

        .feature-card{
            transition:.3s;
            border:none;
            border-radius:15px;
        }

        .feature-card:hover{
            transform:translateY(-8px);
            box-shadow:0 10px 20px rgba(0,0,0,.15);
        }

        .feature-icon{
            font-size:60px;
            color:#0d6efd;
        }

        footer{
            background:#212529;
            color:white;
            margin-top:60px;
            padding:20px;
            text-align:center;
        }

    </style>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-cash-stack"></i>
            Payroll Management
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="<?= base_url('login') ?>" class="nav-link">Login</a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('logout') ?>" class="nav-link">Logout</a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<section class="hero text-center">

    <div class="container">

        <h1 class="display-4 fw-bold">
            Welcome to Payroll Management System
        </h1>

        <p class="lead mt-3">
            Manage Employees, Payroll, Payslips and Reports Easily.
        </p>

        <a href="<?= base_url('login') ?>" class="btn btn-light btn-lg mt-3">
            Go to Dashboard
        </a>

    </div>

</section>

<div class="container my-5">

    <h2 class="text-center mb-5 fw-bold">
        System Modules
    </h2>

    <div class="row g-4">

        <div class="col-md-3">

            <div class="card feature-card text-center p-4">

                <i class="bi bi-people-fill feature-icon"></i>

                <h4 class="mt-3">
                    Employees
                </h4>

                <p>
                    Add, edit and manage employee records.
                </p>


            </div>

        </div>

        <div class="col-md-3">

            <div class="card feature-card text-center p-4">

                <i class="bi bi-wallet2 feature-icon"></i>

                <h4 class="mt-3">
                    Payroll
                </h4>

                <p>
                    Generate and manage employee payroll.
                </p>


            </div>

        </div>

        <div class="col-md-3">

            <div class="card feature-card text-center p-4">

                <i class="bi bi-receipt feature-icon"></i>

                <h4 class="mt-3">
                    Payslip
                </h4>

                <p>
                    Generate and download employee payslips.
                </p>

               

            </div>

        </div>

        <div class="col-md-3">

            <div class="card feature-card text-center p-4">

                <i class="bi bi-bar-chart-fill feature-icon"></i>

                <h4 class="mt-3">
                    Reports
                </h4>

                <p>
                    View payroll reports and analytics.
                </p>

            </div>

        </div>

    </div>

</div>

<footer>

    © 2026 Payroll Management System | All Rights Reserved

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>