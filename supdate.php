<html>
    <head>
        <style>
            form{
            margin-top:20px;
            padding:20px 20px;
            border:1px solid;
            width:25%;
            margin-left:400px;
            background-color:#DAF7A6;
            
          }
          h2{
            background-color:black;
            color:white;
            width:30%;
            margin-top:10px;
            margin-left:400px;
            text-align:center;
            
          }
        </style>

    </head>
</html>






<?php

include("connect.php");

$id = $_GET['id']; // Get the customer ID from the URL

$sql = "SELECT * FROM salesman WHERE id = $id"; // Select the customer data
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the customer data
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $city = $row['city'];
    $commission = $row['commission'];

        echo "<h2>Update Customer</h2>";
    echo "<form action='' method='POST'>";


    echo "<label for='name'>Customer name:</label><br>";
    echo "<input type='text' name='name' value='$name' required><br>";

    echo "<label for='grade'>Grade:</label><br>";
    echo "<input type='text' name='grade' value='$city' required><br>";

    echo "<label for='salesman_id'>Salesman ID:</label><br>";
    echo "<input type='number' name='salesman_id' value='$commission' required><br>";

    echo "<input type='hidden' name='customer_id' value='$id'>";
    echo "<br><button type='submit' name='update'>Update</button>";
    echo "</form>";
    
    

} else{
    echo "customer not found";
}

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $city = $_POST['city'];
    $commission = $_POST['commission'];

    $update="UPDATE `salesman` SET `name`='$name',`city`='$city',`commission`='$commission' WHERE id=$id";
    $query = mysqli_query($conn,$update);
    if($query){
        header("Location: salesman.php");
    }
    else{
        echo "Failed to update the record!";
    }
}


    // Display a form to update the customer data
    

$conn->close();

?>




