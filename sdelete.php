<?php
include('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete="DELETE FROM `salesman` WHERE id='$id'";
    $sql=mysqli_query($conn,$delete);
    if($sql){
        header("location:salesman.php");
    }
    else{
        echo"<script>alert('deleting failed')</script>";
    }
}



?>