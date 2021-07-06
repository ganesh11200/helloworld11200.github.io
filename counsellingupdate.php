<?php
session_start();

$server = "localhost";
$user = "root";
$pwd = "";

$name = $_POST["name"];
$id = $_POST["id"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$age = $_POST["age"];
$problem = $_POST["problem"];


$conn = mysqli_connect($server, $user, $pwd, "company"); 

 if (!$conn)
	echo "<h2>No connection</h2>";

$sno = $_SESSION["sno"];
$sql3 = "UPDATE counselling SET Name = '$name', Age = '$age', ID = '$id', Mobile = '$mobile',
 Email='$email', Problem = '$problem' WHERE sno='$sno'";

if (!mysqli_query($conn, $sql3))
    echo "<h2>Error in updating values in table</h2>".$sql3."<br>".mysqli_error($conn);

mysqli_close($conn);
?>

<html>
    <head>
        <title>Response</title>
        <link rel = "stylesheet" href = "styles.css">
    </head>
	<?php
	//include 'navigbar.html' ;
	?>

    <body class = "responsebody">
        
        <div class = "responsediv">
        <h2>Your Response</h2>
    <?php     
         
 
         echo "Name: ".$name."<br><br>";
         echo "ID: ".$id."<br><br>";
         echo "Age: ".$age."<br><br>";
         echo "Mobile Number: ".$mobile."<br><br>";
         echo "E-mail: ".$email."<br><br>";     
         echo "Problem: ".$problem."<br><br>";
		?>     
	<h2>Your response is updated!!</h2>
    <button class = "button btn" onclick = "document.location = 'homepage.php'">Go Back to Home Page</button>
    </div>

    </body>
</html>

