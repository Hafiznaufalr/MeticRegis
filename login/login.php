<?php 
session_start();
include '../connect.php';


$email = $_POST['email'];
$password = md5($_POST['password']);
$pass_md5 = md5($password);
if($email == "" || $password == "")
{
     header("location:form-login.php");
}
else
{
     
$query = "SELECT * FROM user WHERE  email = '$email' AND password ='$password'";    

$result = mysqli_query($connect,$query);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header("location: ../land-page.php");
    
    $_SESSION['user'] = $email;
}
else
{
    header("location: form-login.php");
}
}

?>