<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

//submit to detabase

//ways to connect mysql database

$servername='localhost';
$username='id20542476_root';
$password='Tubunjana@8927998';
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


$sql="TRUNCATE TABLE `id20542476_mess_fund`.`e_fund`;";
$result=mysqli_query($conn,$sql);

if ($result==true) {
    echo "SUCCESSFULLE TRUCATE";
     
}


else{
      echo 
  '<strong>Error!</strong> TRY AGAIN.WE FOUND SOME ERROR!. 

  </button>
<button ><a style="cursor=pointer; text-decoration = none; color = pink;" href="admin.php">Try  Again</a></button>

</div>';

            
           
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESS FUND</title>
    <script src="https://kit.fontawesome.com/82125ab8ed.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="icons8-fund-microdots-premium-96.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
   
</head>
</html>
