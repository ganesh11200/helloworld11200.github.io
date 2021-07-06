<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" href = "styles.css">
<style>

i {
  padding: 10px 18px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #bbb;
  background-color: rgba(1, 27, 50);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

i:hover {background-color: #bbb;
   color: rgba(1, 27, 50);}

i:active {
  background-color: black;
  
  transform: translateY(4px);
}
.button1{
        cursor: pointer;
        font-size: 16px;
        padding: 14px 21px;
        margin: 5px;
        font;
        border: 3px solid balck;

    }
    .btn1{
        color: rgba(1, 27, 50);
        background-color: #bbb;
    }

    
</style>
<body>

<br><br><br>
<form class = "formcontainer" id="submitform"  action = "datasearch.php" method="POST">


<label style="font-size:18px">Search by</label><br>
<select name="column">
	<option value="Name">Name</option>
	<option value="ID">ID</option>
	</select></p><br><br>


<input type="text" id="search" name="search" placeholder="Type here.."><br><br>
<center>
<i class="fa fa-search" onclick="submitfunc()"></i><br><br>
</center>
</form>
<br><br>
<h2 style = "color: #bbb;font-family:'Brush Script MT', cursive">Do you want to see the list of employees who need financial help?</h2>
<p style = "font-size: 18px;font-family:'Brush Script MT', cursive;color: #bbb;">Click the below button to see the list.</p>
<button class = "button1 btn1" onclick = "document.location = 'financelist.php'">Display List </button>


<script>
function submitfunc(){
	document.getElementById("submitform").submit();
	
	
}	
</script>	
</body>
</html>