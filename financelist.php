<html>
    <head>
     <link rel = "stylesheet" href = "styles.css">
     <style>
         div{
           margin-left: auto;
           margin-right: auto;
           width: 40%;
           background-color: #bbb;
           font-family: "Brush Script MT", cursive;
           font-size: 18px;  
         }
         </style>

    </head>
    <body>
    <div style="text-align: center">
        <?php
            
            $server = "localhost";
            $user = "root";
            $pwd = "";
            
            $conn = mysqli_connect($server, $user, $pwd, "company");
            
            if (!$conn){
                echo("Connection failed: ". mysqli_error($conn));
            }
            
            $sql6 = "SELECT * FROM financialhelp ORDER BY Expectedamount DESC";
            $res = mysqli_query($conn,$sql6);
            
                
                for($x = 1;($row = mysqli_fetch_assoc($res)); $x++){
                    
                    echo "<h3 style = 'text-align: left;'>".$x.".</h3>";                  
                    echo "Name: ".$row['Name']." <br><br>ID: ".$row['ID']."<br><br>Mobile Number: ". $row['Mobile']."<br><br>Email: ".$row['Email'].
                    "<br><br>Are tested positive for covid? ".$row['Covidstatus']."<br><br>Are your family members affected? ".$row['Familycovidstatus'].
                    "<br><br>Reason to claim Financial Support: ".$row['Reason']."<br><br>Expected Amount: ".$row['Expectedamount'].
                    "<br><br>Account Number: ".$row['Accountno']."<br><br>Bank Name: ".$row['Bank']."<br><br>IFSC Code: ".$row['IFSC']."<br><br><hr>";
                }
            
            
            
            mysqli_close($conn);
        ?>
        </div>
        </body>
    </html>    