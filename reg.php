<!DOCTYPE html>
<html lang="en">
<head>

<title>Formation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta rel="stylesheet" content="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
<h1>Formation</h1>
</header>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="page2.html">Login</a></li>
      <li><a href="info.html">Info</a></li>
	</ul>
    <ul class="nav navbar-nav navbar-right">
	  <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="page2.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<article>
<h2>Welcome</h2>
<p> Please fill up the following information to register.
All given information is confidental and it won't be used in any other purposes than what
it was originally given for.
<br>PASKAA ENGLATIA --> KORJAAA
<br> "englatia" huva suomi muos :'D

 <div class="form-group">
 
 <form action="signup.php" method="POST">
  <input type="text" name="FName" placeholder="Firstname">
  <input type="text" name="LName" placeholder="Lastname">
  <input type="text" name="City" placeholder="City">
  <input type="text" name="Department" placeholder="Derpartment">
  <input type="text" name="Username" placeholder="Select username">
  <input type="password" name="Password" placeholder="Select password">
  <button type="submit">Submit</button>
</form>
</div>

</p>

</article>

<footer>Sivu pahasti kesken.</footer>