<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>edutech</title>
</head>


<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background-image: url("img/tenor.gif");
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #2d3655;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #475970;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #39455e;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}


</style>



<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>

  	<div class="input-group">
  		<label>Username :</label>
  		<input type="text" name="username" >
  	</div>

  	<div class="input-group">
  		<label>Password :</label>
  		<input type="password" name="password">
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login">Login</button>
  	</div>

  	<p>
  		Not yet a member? <a href="regi.php">Sign up</a>
  	</p>
  </form>
</body>
</html>



