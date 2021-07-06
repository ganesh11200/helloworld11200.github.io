<?php
        session_start();
?>
<!DOCTYPE html>
<head>
<link rel = "stylesheet" href = "styles.css" >
</head>


<body class = "responsebody">
<div class = "responsediv">

<?php
        $server = "localhost";
        $user = "root";
        $pwd = "";
        
        
        $Name = $_POST['name'];
        ## $age = $_POST['age'];
        $idnumber = $_POST['id'];
        $mobileno = $_POST['mobile'];
        $emailid = $_POST['email'];
        $amountdonated = $_POST['amount'];
        $serialno = $_SESSION['currentsno'];

        echo "Name: ".$Name."<br><br>";
       
        echo "ID: ".$idnumber."<br><br>";
        echo "Mobile Number: ".$mobileno."<br><br>";
        echo "E-mail: ".$emailid."<br><br>";
        echo "Donating Amount:".$amountdonated."<br><br>";

        $conn = mysqli_connect($server, $user, $pwd, "company");
         if($conn){
           //echo "Connected to database succesfully";
         }
         else{
             echo "Not connected to the database";
         }

         $sql6 = "UPDATE donate
                   SET  Name = '$Name', ID = '$idnumber', Mobile = '$mobileno', Email = '$emailid', Amount = '$amountdonated'
                   WHERE sno = $serialno";
        if(mysqli_query($conn,$sql6)){
          echo "<h2 style = 'text-align:center;'>Information is updated</h2>";
        }
        mysqli_close($conn);
?>
       <br><br>
        <h2 style = "font-family: 'Brush Script MT', cursive; color: rgb(1, 27, 50);">Thank you for Donating!!</h2><br><br>
      <button class = "btn button" onclick = "document.location = 'homepage.php'">Go Back to Home Page</button>
      </div>
     
      <body>
</html>