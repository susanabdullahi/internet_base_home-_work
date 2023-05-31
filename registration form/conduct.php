<!DOCTYPE html>
<?php
 $email='email';
if(isset($_POST["submit"])){
    $fname=$_POST["fname"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];

}

require 'connect.php';

//select  where field name=email
$select="select * from registers where  email='$email' ";
$query= mysqli_query($con,$select);

if(mysqli_num_rows($query)>0){
    echo '<script>alert("email already exists please try again");</script>';

}
else{
    $insert="insert into registers(`fname`,`email`,`gender`)"."values('$fname','$email','$gender')";

    $query2=mysqli_query($con,$insert);

    if($query2){
        echo '<script>alert("done");window.location.assign("index.html");</script>';
    }
}