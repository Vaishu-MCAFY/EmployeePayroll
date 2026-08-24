<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Edit Employee</h2>

    <form action="<?= base_url('employee/update/' . $employee['id']) ?>" method="post">

        <?= csrf_field(); ?>

        <input type="text"
               name="emp_id"
               class="form-control mb-3"
               value="<?= esc($employee['emp_id']) ?>"
               readonly>

        <input type="text"
               name="name"
               class="form-control mb-3"
               value="<?= esc($employee['name']) ?>"
               required>

        <input type="email"
               name="email"
               class="form-control mb-3"
               value="<?= esc($employee['email']) ?>"
               required>

        <input type="text"
               name="phone"
               class="form-control mb-3"
               value="<?= esc($employee['phone']) ?>"
               required>

        <input type="text"
               name="department"
               class="form-control mb-3"
               value="<?= esc($employee['department']) ?>"
               required>

        <input type="text"
               name="designation"
               class="form-control mb-3"
               value="<?= esc($employee['designation']) ?>"
               required>

        <input type="number"
               name="basic_salary"
               class="form-control mb-3"
               value="<?= esc($employee['basic_salary']) ?>"
               required>

        <input type="date"
               name="joining_date"
               class="form-control mb-3"
               value="<?= esc($employee['joining_date']) ?>"
               required>

        <select name="status" class="form-control mb-3">

            <option value="Active"
                <?= $employee['status'] == 'Active' ? 'selected' : '' ?>>
                Active
            </option>

            <option value="Inactive"
                <?= $employee['status'] == 'Inactive' ? 'selected' : '' ?>>
                Inactive
            </option>

        </select>

        <button type="submit" class="btn btn-primary">
            Update Employee
        </button>

        <a href="<?= base_url('employee') ?>"
           class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

</body>
</html>