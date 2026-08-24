<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= base_url('css/emp.css') ?>">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Employee List</h2>

        <a href="<?= base_url('employee/create') ?>" class="btn btn-success">
            <i class="bi bi-person-plus-fill"></i> Add Employee
        </a>
    </div>

    <?php if(session()->getFlashdata('success')) : ?>

        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>

    <?php endif; ?>


    <div class="table-responsive">

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark">

                <tr>

                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th width="250">Action</th>

                </tr>

            </thead>

            <tbody>

            <?php if(!empty($employees)) : ?>

                <?php foreach($employees as $emp) : ?>

                <tr>

                    <td><?= esc($emp['emp_id']) ?></td>

                    <td><?= esc($emp['name']) ?></td>

                    <td><?= esc($emp['department']) ?></td>

                    <td>₹<?= number_format($emp['basic_salary'],2) ?></td>

                    <td>

                        <?php if($emp['status']=="Active") : ?>

                            <span class="badge bg-success">
                                Active
                            </span>

                        <?php else : ?>

                            <span class="badge bg-danger">
                                Inactive
                            </span>

                        <?php endif; ?>

                    </td>

                    <td>

                        <a href="<?= base_url('employee/edit/'.$emp['id']) ?>"
                           class="btn btn-warning btn-sm">

                            <i class="bi bi-pencil-square"></i> Edit

                        </a>

                        <a href="<?= base_url('employee/delete/'.$emp['id']) ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this employee?')">

                            <i class="bi bi-trash"></i> Delete

                        </a>

                        <a href="<?= base_url('payroll/create/'.$emp['id']) ?>"
                           class="btn btn-primary btn-sm">

                            <i class="bi bi-cash-stack"></i> Payroll

                        </a>

                    </td>

                </tr>

                <?php endforeach; ?>

            <?php else : ?>

                <tr>

                    <td colspan="6" class="text-center">
                        No Employee Found
                    </td>

                </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>