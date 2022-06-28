<?php 

session_start();

	include("connection.php");
	include("function.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: profile.php");
						die;
					}
				}
			}
			echo '<script>alert("wrong username or password!")</script>';
		}
		else
		{
			echo '<script>alert("wrong username or password!")</script>';
		}
	}
 

?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="./CSS/singup.css">
        <link rel="stylesheet" href="./CSS/style.css">
		<style>
		input[type="submit"] {
    font-size: 110%;
    font-weight: 100;
    background: #006dcc;
    border-color: #016BC1;
    box-shadow: 0 3px 0 #0165b6;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #0165a6;
}
		</style>
</head>
	<body style=" background-image:url(singupimg.webp); width: 100%; height: 100vh; background-size: cover; background-position: center;">
            <div class="navbar">
              <img src ="NUTRI-TOPIA-logos_black.png" alt="" width="145px" height="145px" >
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">contact</a></li>
              </ul>
            </div>
            <form name="contactForm"  class="singup" style = "position:absolute; right:130px;" method="post">
                <h2>log in</h2><br>
                <div class="row">
                    <label>username</label>
                    <input type="text" name="user_name" required=""> 
                  </div>
                <div class="row" >
                    <label>password</label>
                    <input type="password" name="password" required="">
                 </div>
			    	<div class="row">
                   <input type="submit" value="login">
                   </div>
                <a href="signup.php">Create accoount?</a><br><br>
            </form>
</body>
</html>