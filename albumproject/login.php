<?php include "db.php" ?>
<?php include "style.css" ?>
<!DOCTYPE html>
<html>
	<head>
		<?php session_start(); ?>
	 <title>Login</title>
	 <h1>Welcome to the hotel</h1>
  </head>
<body>
<?php
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
$user_query = "SELECT * FROM users WHERE username = '{$username}' ";
$user_conn = mysqli_query($connection, $user_query);
if(!$user_conn){
	die("Failed Query");
}
while($row = mysqli_fetch_assoc($user_conn)){
      $user_id = $row['user_id'];
      $username = $row['username'];
      $user_password = $row['password'];
      $user_firstname = $row['firstname'];
      $user_lastname = $row['lastname'];
      $user_email = $row['email'];
}
if(password_verify($password, $user_password)){     
       $_SESSION['username'] = $username;
       $_SESSION['firstname'] = $user_firstname;
       $_SESSION['lastname']  = $user_lastname;
       $_SESSION['email'] = $user_email;
       header("Location: imagegallery/index.php"); 
}
else {
	header("Location:login.php");

     }
 }
?>
<div class="signup-form">
    <form action="" method="post">
    	<h4 style="color: blue; font-size: 40px;">LOG IN</h4>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
        </div>
       <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
            <button type="submit" name = 'login' class="btn btn-primary btn-lg">LOG IN</button>
        </div>
        <p><a href="">Forgot Password</a></p>
         <p> Or if you do not have an account: </p>
        <div class="form-group">
            <button type="submit" name='signup' class="btn btn-primary btn-lg"><a href = "sign_up.php">SIGN UP</button>
        </div>
          <p> Or you can contact us: </p>
          <div class="form-group">
            <button type="submit" name='signup' class="btn btn-primary btn-lg"><a href = "contact.php">Contact Us</button>
    </form>
</div>
</body>
</html>