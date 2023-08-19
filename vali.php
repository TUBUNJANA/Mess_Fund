<?php
$wall_paper = "images/im3.jpg";
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

//submit to detabase

//ways to connect mysql database

$servername="localhost";
$username="id20542476_root";
$password="Tubunjana@8927998";
$database="id20542476_mess_fund";

//create connection object

$conn=mysqli_connect($servername,$username,$password,$database);

//checking the connection


if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
else{
          //  echo "connection establish successfully<br>";
    }




$email=$_POST['email'];
$pass=$_POST['pass'];

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `confidential` WHERE `id` LIKE '$email' AND BINARY `pass` LIKE '$pass'";
$resul=mysqli_query($conn,$sql);
$numb=mysqli_num_rows($resul);
if ($numb==1)
{
        $_SESSION['username']=$email;
          header('location:index1.php');
}
elseif ($email=="tubunjana052@gmail.com" && $pass=="koushik@052") {
    $_SESSION['username']=$email;
	 header('location:admin.php');
}

else{
      echo 
  '<strong>Error!</strong> Invalid Login credentials.
  

  
<button ><a style="cursor=pointer; text-decoration = none; color = pink;" href="index.html">Try  Again</a></button>

</div>';

            
           
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
body {
background-image: url('<?php echo $wall_paper;?>');
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESS FUND</title>
    <script src="https://kit.fontawesome.com/82125ab8ed.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="icons8-fund-microdots-premium-96.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
   
</head>
</html>
