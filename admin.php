<?php
$wall_paper = "images/im3.jpg";
session_start();
if(!isset($_SESSION['username'])){
     echo "SESSION EXPIRE LOGIN AGAIN";
     
}
else{
$d=$_SESSION['username'];
echo "<table style='border: solid 1px black;'>";
echo "<tr><th></th><th></th><th><p> WELLCOME : :   <font color=red>$d</font> </p>   </th><th";
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
$result=mysqli_query($conn,$sql);
$numb=mysqli_num_rows($result);
$TUB=0;
$SUM=0;
$RAN=0;
$SAH=0;
$APU=0;
$d=0;
while($row = mysqli_fetch_row($result)){
    
    echo str_repeat('&nbsp;', 12);
    
   $d=(int)$row[1];
    $SAH=$SAH+$d;
    echo str_repeat('&nbsp;', 8);
   
   /* $d=(int)$row[2];
    $SUM=$SUM+$d;
    echo str_repeat('&nbsp;', 8); */

    
    $d=(int)$row[3];
    $RAN=$RAN+$d;
    echo str_repeat('&nbsp;', 8);
    
    /*  $d=(int)$row[4];
    $APU=$APU+$d;
    echo str_repeat('&nbsp;', 8);*/
    
    $d=(int)$row[5];
    $TUB=$TUB+$d;

	
	echo "<br>";
}

echo "<table style='border: solid 1px black;'>";

echo "<tr><th><p>SAHID'S TOTAL AMOUNT is   = <font color=red> $SAH </font> </p>  </th><th";


echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th><p>SUMAN'S TOTAL AMOUNT is   =  <font color=red>$SUM</font> </p></th><th";

echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th><p>RANJAN'S TOTAL AMOUNT is   = <font color=red> $RAN </font> </p>  </th><th";

echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>  <p>APURBA'S TOTAL AMOUNT is   =  <font color=red>$APU</font> </p> </th><th";

echo "<br>";
echo "<br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th> <p>TUBUN'S TOTAL AMOUNT is   =   <font color=red>$TUB</font> </p>  </th><th";

echo "<br>";
echo "<br>";


$TOTAL=$SUM+$SAH+$RAN+$APU+$TUB;
echo "<table style='border: solid 1px black;'>";
echo "<tr><th> <p>TOTAL SUM OF EVERYONE IS   =  <font color=red>$TOTAL</font> </p>  </th><th";
$TOTAL=$TOTAL/3;
echo "<br>";
echo "<tr><th> <p>PER HEAD AMOUNT IS  =  <font color=red>$TOTAL</font> </p>   </th><th";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "<table style='border: solid 1px black;'>";
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
  <title>MESS FUND</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="icons8-fund-microdots-premium-96.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:powderblue;">

                <form class="form login loginform" action="/logout.php"  method="post">
                    
                 
                    <br>
                    <div class="button">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                        <input type="submit" value="CLICK HERE TO LOGOUT">
                    </div>
                </form>
                
<form class="form login loginform" action="/insert.php"  method="post">
                    <div class="user_details">
                        <h5>&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspSAHID &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbspSUMAN</h5>
                        <div class="input_box">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                               
                            <input type="number" value="0" placeholder="ENTER AMOUNT OF SAHID" name="SAH" required>
                            <input type="number" value="0" placeholder="ENTER AMOUNT OF SUMAN " name="SUM" required>
                        </div>
                        
                       <h5>&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspRANJAN &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp APURBA</h5>
                        
                        <div class="input_box">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                            <input type="number" value="0" placeholder="ENTER AMOUNT OF RANJAN " name="RAN" required>
                            <input type="number" value="0" placeholder="ENTER AMOUNT OF APURBA " name="APU" required>
                        </div>
                        <h5>&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspTUBUN</h5>
                        
                        
                        <div class="input_box">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                            <input type="number" value="0" placeholder="ENTER AMOUNT OF TUBUN " name="TUB" required>
                            <br>
                            <div class="button">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp    &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                        <input type="submit" value="CLICK HERE TO INSERT INTO DB">
                    </div>

                        </div>
                    
                    
                 </form> 
                
                <form class="form login loginform" action="/trunctable.php"  method="post">
                    
                 
                    <br>
                    <div class="container">
  <h4>CLICK BELOW TO TRUNCATE TABLE</h4>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">TRUNCATE</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p><div class="alert alert-danger">
        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
        </div></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="form login loginform">Save changes</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                    <br>
                </form>

                
</body>

</html>
