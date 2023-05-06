<?php
session_start();

if (isset($_SESSION['role'])) {
    switch ($_SESSION['role']) {
    case 'admin':
        header('Location: admin.php');
        break;
    case 'staff':
        header('Location: photographer.php');
        break;
    case 'user':
        header('Location: webphoto.php');
        break;
    }
    exit();
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == 'admin' && $password == 'admin') {
    $_SESSION['role'] = 'admin';
    header('Location: admin.php');
    exit();
    } else if ($username == 'staff' && $password == 'staff') {
    $_SESSION['role'] = 'staff';
    header('Location: photographer.php');
    exit();
    } else if ($username == 'user' && $password == 'user') {
    $_SESSION['role'] = 'user';
    header('Location: webphoto.php');
    exit();
    } else {
    $error_message = 'Username atau password salah';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolibsite</title>

    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <p><b>ABSLT STUDIO</b></p> 
                <a href="login.php"><b>Login</b></a>
            </div>
            <div class="content">
                <form id="form" method="POST" class="form">
                    <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
                    <input type="text" id="username"placeholder="&#xf007;  username" name="username"/>
                    <input type="password" id="pass" placeholder="&#xf023;  password" name="password"/>
                    <i class="fas fa-eye" onclick="show()"></i> 
                    <br>
                    <br>
                    <button type="submit" id="login">LOGIN</button>
                    <p class="message"></p>
                </form>
            </div>
            <footer>
                <a id="nama" href="webphotologin.php"><b>ABSLT STUDIO</b></a>
                <br>
                <p id="slogan">REDEFINING MOMENTS</p>
                <br>
                <p id="kontak"><b>Found us</b></p>
                <br>
                
                    <a href="https://instagram.com/indrabna?igshid=OGQ2MjdiOTE=" target="_blank" ><img src="../img/ig.png"></a>  
                    <a href=""><img src="../img/yt.png"></a>
                    <br><br>
                    <div class="copy">
                        <p><b>&copy; 2023 Abslt Studios. All rights reserved.</b></p>
                    </div>
                </footer>
        </div>
    </body>
</html>


<!-- <!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

<div class="login-page">
  <div class="form">

    <form id="form" method="POST">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input type="text" id="username"placeholder="&#xf007;  username" name="username"/>
      <input type="password" id="pass" placeholder="&#xf023;  password" name="password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button type="submit" id="login">LOGIN</button>
      <p class="message"></p>
    </form>
  </div>
</div>
</body>
</html> -->

