<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Student Registration</h4>
        </div>
        <div class="card-body">
            <form action="post.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="firstnumber" class="form-label">Total Days of Work</label>
                    <input type="number" name="num1" id="firstnumber" class="form-control" placeholder="Enter Number" required>
                </div>

                <div class="mb-3">
                    <label for="secondnumber" class="form-label">Daily Rate</label>
                    <input type="number" name="num2" id="secondnumber" class="form-control" placeholder="Enter Number" required>
                </div>

                <div class="mb-3">
                    <label for="thirdnumber" class="form-label">Cash Advance</label>
                    <input type="number" name="num3" id="thirdnumber" class="form-control" placeholder="Enter Number" required>
                </div>


                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary w-100">General Payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>