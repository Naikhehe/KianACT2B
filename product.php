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
        <input type="checkbox" name="items[]" id="" value="50"> Notebook (₱50.00) <br>
        <input type="checkbox" name="items[]" id="" value="30"> Pencil (₱30.00) <br>
        <input type="checkbox" name="items[]" id="" value="100"> Bag (₱100.00) <br>
        <input type="checkbox" name="items[]" id="" value="75"> Shoes (₱75.00) <br>
        <input type="checkbox" name="items[]" id="" value="25"> Eraser (₱25.00) <br> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['items'])){
            echo "<h3>You Selected: </h3>";
            $total = 0;
            foreach($_POST['items'] as $price){
                echo "$price <br>";
                $total = $total + $price;
            }
            echo "Total: ₱$total";
        }
       
    }
    else{
        echo "Please select items";
    } 
    ?>
</body>
</html>