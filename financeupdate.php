<?php
session_start();

$server = "localhost";
$user = "root";
$pwd = "";

$name = $_POST["name"];
$id = $_POST["id"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$covidstatus = $_POST["covidstatus"];
 $familystatus = $_POST["famcovidstatus"];
$reason = $_POST["reason"];
$amount = $_POST["amount"];
$account = $_POST["account"];
$bank = $_POST["bank"];
$ifsc = $_POST["ifsc"];


$conn = mysqli_connect($server, $user, $pwd, "company"); 

 if (!$conn)
	echo "<h2>No connection</h2>";

$sno = $_SESSION["sno"];
$sql3 = "UPDATE financialhelp SET Name='$name', ID='$id', Mobile='$mobile', Email='$email',
 Covidstatus ='$covidstatus', familycovidstatus ='$familystatus', 
 Reason='$reason', ExpectedAmount='$amount', Accountno='$account', Bank ='$bank', IFSC ='$ifsc' WHERE sno='$sno'";
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
        echo "Mobile Number: ".$mobile."<br><br>";
        echo "E-mail: ".$email."<br><br>";
        echo "Are you tested positive for covid?  ".$covidstatus."<br><br>";
        echo "Are your family members affected?  ".$familystatus."<br><br>";
        echo "Reason to claim financial support: ".$reason."<br><br>";
        echo "Expecting Amount: ".$amount."<br><br>";
        echo "Account Number: ".$account."<br><br>";
        echo "Bank Name: ".$bank."<br><br>";
        echo "IFSC Code: ".$ifsc."<br><br>";
		?>     
	<h2>Your response is updated!!</h2>
    <button class = "button btn" onclick = "document.location = 'homepage.php'">Go Back to Home Page</button>
    </div>

    </body>
</html>

