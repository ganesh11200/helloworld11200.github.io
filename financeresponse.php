<!DOCTYPE html>
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
        <h2 style = "text-align: center;">Your Response</h2>
    <?php
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
	
	
	<?php
        session_start();
       
		$server = "localhost";
        $user = "root";
        $pwd = "";

        $conn = mysqli_connect($server, $user, $pwd, "company");
        if(!$conn){
            echo "Not connected to the database";
        }
        $sql1 = "INSERT INTO financialhelp (Name, ID, Mobile, Email, Covidstatus, Familycovidstatus, Reason, Expectedamount, Accountno, Bank, IFSC) 
			VALUES ('$name', '$id', '$mobile','$email', '$covidstatus', '$familystatus', '$reason', '$amount', '$account', '$bank', '$ifsc')";

        if(mysqli_query($conn, $sql1)){
            // echo "<center><h2>Your data has been submitted successfully!!</h2></center>";
        }
        else{
			echo "not inserted in table".mysqli_error($conn);
        }
		
		
		$_SESSION["sno"] = mysqli_insert_id($conn);
		
		mysqli_close($conn);

    ?>
    <button class = "button btn" onclick='location.href="financeedit.php"'>Edit your response</button><br>
    <button class = "btn button" onclick = "document.location = 'homepage.php'">Back to Home Page</button><br><br>
    </div>
    </body>
</html>