<?php
if(isset($_POST['name'])){
 $con = mysqli_connect("localhost","root","","donate_db");   
   if(!$con)
      {
        die("connection failed");
      }
    echo "Success connecting to the db";
$name=$_POST['name'];
$email=$_POST['email'];
$amount=$_POST['amount'];

$sql = "INSERT INTO `payment_form` (`name`, `email`, `amount`) VALUES ('$name', '$email', '$amount')";
    echo $sql;
    if($con->query($sql)==true)
    {
        echo "Successfully inserted";
    }
    else
    {
        echo "ERROR : $sql <br> $con->error";
    }
      $con->close();  
}
?>    

    