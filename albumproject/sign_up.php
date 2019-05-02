<?php include "db.php" ?>
<?php include "style.css" ?>

<?php
 if(isset($_POST['signup'])){
 	  $username = $_POST['username'];
      $password = $_POST['password'];
      $user_firstname = $_POST['firstname'];
 	  $user_lastname = $_POST['lastname'];
      $email = $_POST['email'];
  if(!empty($user_firstname) && !empty($user_lastname) && !empty($username) && !empty($email) && !empty($password))
      {
      $username = mysqli_real_escape_string($connection , $username);
      $password = mysqli_real_escape_string($connection, $password);
      $user_firstname = mysqli_real_escape_string($connection, $user_firstname);
      $user_lastname = mysqli_real_escape_string($connection, $user_lastname);	
      $email    = mysqli_real_escape_string ($connection, $email);  
      $password = password_hash($password, PASSWORD_BCRYPT , array('cost' => 10) ); 
      $query = "INSERT INTO users(username, password, firstname, lastname, email,  user_role) ";
      $query .= " VALUES('{$username}', '{$password}', '{$user_firstname}', '{$user_lastname}', '{$email}', 'admin' )";
      $register_user_query = mysqli_query($connection, $query);
      if(!$register_user_query){
          
          die("Query failed". mysqli_error($connection) . '' . mysqli_errno($connection));
      }
   $message = "Your Registration has been submitted";
  }
   else{
       $message = "Fields cannot be empty";
       }   
      }
else{
    
    $message = "";
}
?>
<!DOCTYPE html>
<html>
	<head>
	 <title>Login</title>
	 <h1>Welcome to the hotel</h1>
  </head>
<body>
<div class="signup-form">
    <form action="sign_up.php" method="post">
    	<h4 style="color: blue; font-size: 40px;">SIGN UP</h4>
    	 <h6 class="text-center"><?php echo $message; ?></h6>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="firstname" placeholder="Your name" required="required">
			</div>
        </div>
       <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="text" class="form-control" name="lastname" placeholder="Your lastname" required="required">
			</div>
        </div>
       <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="text" class="form-control" name="username" placeholder="username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="text" class="form-control" name="email" placeholder="Your email" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="new password" required="required">
			</div>
        </div>
      <!--  <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="confirm password" required="required">
			</div>
        </div> -->
        <div class="form-group">
            <button type="submit" name ="signup" class="btn btn-primary btn-lg">SIGN UP</button>
        </div>
         <p> Or if you  have an account: </p>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg"><a href = "login.php">LOG IN</a></button>
        </div>
  </form>
  </div>
 </body>
</html>