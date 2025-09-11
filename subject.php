<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Select Your Subjects</h2>
    <form action="" method="post">
        <input type="checkbox" name="subjects[]" id="" value="Math"> Math <br>
        <input type="checkbox" name="subjects[]" id="" value="Science"> Science <br>
        <input type="checkbox" name="subjects[]" id="" value="English"> English <br>
        <input type="checkbox" name="subjects[]" id="" value="Rizal"> Rizal <br>
        <input type="checkbox" name="subjects[]" id="" value="Pathfit"> Pathfit <br> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['subjects'])){
            echo "<h3>You Selected: </h3>";
            foreach($_POST['subjects'] as $subject){
                echo "$subject <br>";
            }
        }
       
    }
    else{
        echo "Please select Subjects";
    } 
    ?>
</body>
</html>