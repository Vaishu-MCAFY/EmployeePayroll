<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Payroll List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4">Payroll List</h2>


    <?php if(session()->getFlashdata('success')): ?>

        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>

    <?php endif; ?>


    <?php if(session()->getFlashdata('error')): ?>

        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>

    <?php endif; ?>


    <table class="table table-bordered table-hover">

        <thead class="table-dark">

            <tr>

                <th>ID</th>

                <th>Employee</th>

                <th>Month</th>

                <th>Year</th>

                <th>Net Salary</th>

                <th>Payment Status</th>

                <th>Action</th>

            </tr>

        </thead>


        <tbody>

        <?php if(!empty($payroll)): ?>

            <?php foreach($payroll as $row): ?>

                <tr>

                    <td>
                        <?= $row['id'] ?>
                    </td>


                    <td>
                        <?= esc($row['name']) ?>
                    </td>


                    <td>
                        <?= esc($row['month']) ?>
                    </td>


                    <td>
                        <?= esc($row['year']) ?>
                    </td>


                    <td>
                        ₹<?= number_format($row['net_salary'], 2) ?>
                    </td>


                    <td>

                        <?php if($row['payment_status'] == 'Paid'): ?>

                            <span class="badge bg-success">
                                <i class="bi bi-check-circle"></i>
                                Paid
                            </span>

                        <?php else: ?>

                            <span class="badge bg-warning text-dark">
                                <i class="bi bi-clock"></i>
                                Pending
                            </span>

                        <?php endif; ?>

                    </td>

                    <td>

                        <?php if($row['payment_status'] == 'Pending'): ?>

                            <a href="<?= base_url('payroll/markPaid/' . $row['id']) ?>"
                               class="btn btn-success btn-sm"
                               onclick="return confirm('Are you sure you want to mark this salary as Paid?');">

                                <i class="bi bi-check-circle"></i>
                                Mark as Paid

                            </a>

                        <?php else: ?>

                            <span class="text-success">
                                <i class="bi bi-check-circle-fill"></i>
                                Salary Paid
                            </span>

                        <?php endif; ?>

                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>

                <td colspan="7" class="text-center">

                    No Payroll Records Found

                </td>

            </tr>

        <?php endif; ?>

        </tbody>

    </table>

</div>

</body>
</html>