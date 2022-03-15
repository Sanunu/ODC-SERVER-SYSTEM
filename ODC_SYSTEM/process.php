<?php
include_once('database.php')

?>

<?php
if (isset($_POST['save'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $email =$_POST['email'];
    $nextk =$_POST['nextk'];
    $home_address =$_POST['home_address'];
    $sql_post = "INSERT INTO STUDENT2(fname,lname,email,nextk,home_address)
    VALUES('$fname','$lname','$email','$nextk','$home_address')";
 if(mysqli_query($con,$sql_post)){
     echo'registration successful';
 } else{
     echo 'error please insert correct data';
 }
 mysqli_close($con);
}

?>