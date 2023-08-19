<?php
$wall_paper = "images/im3.jpg";
try{
session_start();


if(!isset($_SESSION['username'])){
    
    echo "SESSION EXPIRE LOGIN AGAIN";
}
else{
    $d=$_SESSION['username'];
echo "<table style='border: solid 1px black;'>";
echo "<tr><th></th><th></th><th> <p>WELLCOME : : <font color=red>$d</font> </p> </th><th";
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";


$servername='localhost';
$username='id20542476_root';
$password='Tubunjana@8927998';
$database="id20542476_mess_fund";

//create connection object

$conn=mysqli_connect($servername,$username,$password,$database);
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>DATE</th><th>SAHID</th><th><font color=red>SUMAN BLOCKED</font></th><th>RANJAN</th><th><font color=red>APURBA BLOCKED</font></th><th>TUBUN</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}



try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM `e_fund`;");
  $stmt->execute();
  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";




$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `e_fund`;";
$resul=mysqli_query($conn,$sql);

$TUB=0;
$SUM=0;
$RAN=0;
$SAH=0;
$APU=0;
$d=0;
while($row = mysqli_fetch_row($resul)){
    
    echo str_repeat('&nbsp;', 12);
    
   $d=(int)$row[1];
    $SAH=$SAH+$d;
    echo str_repeat('&nbsp;', 8);
   
    /*$d=(int)$row[2];
    $SUM=$SUM+$d;
    echo str_repeat('&nbsp;', 8);*/
    
    $d=(int)$row[3];
    $RAN=$RAN+$d;
    echo str_repeat('&nbsp;', 8);
    
    /*$d=(int)$row[4];
    $APU=$APU+$d;
    echo str_repeat('&nbsp;', 8);*/
    
    $d=(int)$row[5];
    $TUB=$TUB+$d;

	
	echo "<br>";
}

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>  <p>SAHID'S TOTAL AMOUNT is   = <font color=red>$SAH</font> </p>  </th><th";


echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th><p>SUMAN'S TOTAL AMOUNT is   =  <font color=red>$SUM</font> </p></th><th";

echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>  <p>RANJAN'S TOTAL AMOUNT is   =  <font color=red>$RAN</font> </p> </th><th";

echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th><p>APURBA'S TOTAL AMOUNT is =    <font color=red>$APU</font> </p>  </th><th";

echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>   <p>TUBUN'S TOTAL AMOUNT is   =  <font color=red>$TUB</font> </p> </th><th";

echo "<br>";
echo "<br>";


$TOTAL=$SUM+$SAH+$RAN+$APU+$TUB;
echo "<table style='border: solid 1px black;'>";
echo "<tr><th> <p>TOTAL SUM OF EVERYONE IS   =  <font color=red>$TOTAL</font> </p>  </th><th";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$TOTAL=$TOTAL/3;
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>  <p>PER HEAD AMOUNT IS  =   <font color=red>$TOTAL</font> </p>  </th><th";

echo "<br>";
echo "<br>";
}
}
catch(Exception $e) {
  echo "SESSION EXPIRE";
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
    <link rel="shortcut icon" href="icons8-fund-microdots-premium-96.png" type="image/x-icon">
    <title>MESS FUND</title>
    <script src="https://kit.fontawesome.com/82125ab8ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>


                                           
<form class="form login loginform" action="logout.php"  method="post">
                    <br>
                    <div class="button">
                        
                        <input type="submit" value="CLICK HERE TO LOGOUT">
                    </div>
                </form>
                
</body>
</html>