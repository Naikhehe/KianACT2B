
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-3">Submitted Information</h3>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['fullname'];
            $age = $_POST['age'];
            $grade = $_POST['grade'];
            $course = $_POST['course'];
            $gender = $_POST['gender'];

            if($course == "ACT"){
                $tuition = 15000;
            }
            else if($course == "HM"){
                $tuition = 20000;
            }
            else if($course == "BSOA"){
                $tuition = 18000;
            }

            $grade_discount = 0;
            $age_discount = 0;

            if($age >= 26 && <=30)
                {
                    $age_discount = $tuition * 0.05;
                }
            if($grade >95)
                {
                    $grade_discount = $tuition * 0.20;
                }

                $total_discount = $grade_discount + $age_discount;
                $final_discount = $tuition - $total_discount
        }
        else
            {
                echo "No data selected"
            }
        

        ?>
        <p><strong>Full Name:</strong> kian</p>
        <p><strong>Age:</strong> 26</p>
        <p><strong>Average Grade:</strong> 95</p>
        <p><strong>Course:</strong> HM</p>
        <p><strong>Gender:</strong> Male</p>
        <hr>
        <p><strong>Tuition Fee:</strong> ₱20,000.00</p>
        <p class='text-success'><strong>Grade Discount (20%):</strong> -₱4,000.00</p>
        <p class='text-success'><strong>Age Discount (5%):</strong> -₱1,000.00</p>
        <p class='text-primary'><strong>Total Discounts:</strong> -₱5,000.00</p>
        <h5><strong>Final Tuition Fee:</strong> ₱15,000.00</h5>        
        <a href="registration.php" class="btn btn-secondary mt-3">Go Back</a>
    </div>
</div>

</body>
</html>
