
<?php
session_start();

	include("connection.php");
	include("function.php");
if (isset($_POST['signup'])){
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space ";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($mobile) < 10) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}

if (!isset($name_error)&& !isset($email_error)&& !isset($mobile_error)&& !isset($password_error)&& !isset($cpassword_error)) {
	$user_id = random_num(50);
     if(mysqli_query($conn, "INSERT INTO users(user_id,name, email, mobile, password) VALUES('$user_id','$name','$email','$mobile','$password')")){
		header("Location: login.php");
     die;
   } 
   else{
     echo "Error: " . $sql . "" . mysqli_error($conn);
   }
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./CSS/singup.css">
<link rel="stylesheet" href="./CSS/style.css">
<style>
	.signup{
		transform: translate(80%,-10%);
	}
	.text-danger{
		color:red;
	}
	.navbarind{
    width: 80%;
    padding: 40px 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
	.navbarind ul li{
    list-style:none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbarind ul li a{
    text-decoration: none;
    color: black;
    text-transform: uppercase;

}
.navbarind ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: black;
    position: absolute;
    left: 0;
    bottom: -5px;
    transition: 0.5s;
}
.navbarind ul li:hover::after{
    width:100%;
}
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
    background: #0165b6;
}

	</style>
</head>
<body style=" background-image:url(singupimg.webp); width: 99%; height: 100; background-size: cover; background-position: center;">
<div class="navbarind">
              <img src ="NUTRI-TOPIA-logos_black.png" alt="" width="145px" height="145px" >
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">contact</a></li>
              </ul>
            </div>

<form  name="contactForm" class="signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="" maxlength="50" required="">
<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
</div><br>
<div class="form-group ">
<label>Email</label>
<input type="email" name="email" class="form-control" value="" maxlength="30" required="">
<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
</div><br>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control" value="" maxlength="12" required="">
<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
</div><br>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div><br>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="cpassword" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
</div><br>
<input type="submit" name="signup" value="submit"><br>
   Already have a account?  <a href="login.php" class="btn btn-default">Login</a>
</form>
</div>
</div>    
</div>
</body>
</html>