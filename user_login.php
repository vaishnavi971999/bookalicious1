<?php
include ("connect.php");
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location:index.php");
    exit;
}
$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "select email,password from user where email='$email' ";
    $result = mysqli_query($link,$sql);
    //$res = mysqli_fetch_array($result);
    //$hash = $res['password'];
    if(mysqli_num_rows($result)>0){
        
        //if(password_verify($password,$hash)){
        session_start();
        $_SESSION["loggedin"]=true;
        $_SESSION["email"] = $email;
        header("location:index.php");
        //}
    }
    else{
        $error="Username or password is incorrect.";
    }
    
  }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">

<style>
    .login_emo{
    text-align: center;
    width: 150px;
    text-align:center;
  }
  #main_wrapper{
    text-align: center;
    width:350px;
    margin:0 auto;
    background:white;
    padding:5px;
    border-radius:2px solid #0c7ae9;
  }

</style>

</head>
<body style="background-color:#03fc84" >


 <div id="main_wrapper">
 <div class="form">
 <h1 style="text-align:center"> Login</h1>
 <img src="images/login1.jpg" class="login_emo"><br>
<form aligin="center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
<div class="form-group">
<label >Email:</label>
<input class="form-control" type="email" name="email" required>

</div>

<div class="form-group">
<label >Password:</label>
<input class="form-control" type="password" name="password" required >
</div>
<input class="form-control btn-primary"  type="submit" value="Submit">

<p><?php echo $error ?></p>

</form>
</div>
</div>
</body>
</html>