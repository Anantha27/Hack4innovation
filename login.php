<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['LOGIN']))
{
	
		session_start();
		$EM =$_POST['email'];
		
		$PW =$_POST['password'];
		$result=$con->query("select * from people where EmailID='$EM' AND Password='$PW'");
		$row=$result->fetch_array(MYSQLI_BOTH);
		session_start();
		$_SESSION["first_name"]= $row['first_name'];
		header('Location: Account.php');
		
}


?><head>
    <meta charset="UTF-8">
    <title>Account</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" />   
</head>



 


<h1>&nbsp;</h1>
<h1>WELCOME TO CMSONLINE</h1>


<div id="tabs">
  <ul>
    <li><a href="login.php"><span>HOME</span></a></li>
    <li><a href="reg.php"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
     </ul>
</div>


   

<div>


<div id="Pageheading">
  <h1>CAMPUS MANAGEMENT SYSTEM</h1>
</div>
<form action="" method="post">

<div class="FormElement">

  <input name="email" type="email" required="required" class="TField" id="email" placeholder="Email ID">
</div>
<div class="FormElement">

  <input name="password" type="password" required="required" class="TField" id="password" placeholder="Password">
</div>
<div class="FormElement">
<input name="LOGIN" type="submit" class="button" id="LOGIN" value="LOGIN">
</div>
</form>  


</div>



