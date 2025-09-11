
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

            if($age >= 26 && $age <= 30)
                {
                    $age_discount = $tuition * 0.05;
                }
            if($grade >95)
                {
                    $grade_discount = $tuition * 0.20;
                }

                $total_discount = $grade_discount + $age_discount;
                $final_tuition = $tuition - $total_discount;
        }
        else
            {
                echo "No data selected";
            }
        

        ?>
        <p><strong>Tuition Fee:</strong> ₱20,000.00</p>
        <p class='text-success'><strong>Grade Discount (20%):</strong> -₱4,000.00</p>
        <p class='text-success'><strong>Age Discount (5%):</strong> -₱1,000.00</p>
        <p class='text-primary'><strong>Total Discounts:</strong> -₱5,000.00</p>

    <?php
    if($grade_discount > 0){
        echo "<p class='text-success'><strong>Grade Discount (20%):</strong> -₱" .number_format($grade_discount,2)."</p>";
    }
    if($age_discount > 0){
        echo "<p class='text-success'><strong>Age Discount (5%):</strong> -₱" .number_format($age_discount)."</p>";
    }
    if($total_discount > 0){
        echo "<p class='text-primary'><strong>Total Discounts:</strong> -₱" .number_format($total_discount)."</p>";
    }
    else{
        echo "No Discount Applied";
    }
    ?>
    <h5><strong>Final Tuition Fee:<?=$final_tuition?></strong> </h5>     
    <a href="registration.php" class="btn btn-secondary mt-3">Go Back</a>
</div>

</body>
</html>
