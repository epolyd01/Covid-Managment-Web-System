<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> System Login</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"><link rel="stylesheet" href="./style.css">

<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/28669.jpg"
}</script>

<style>
img {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
</style>
</head>
<body>

<div>
   <a href="https://deltasoft.eu/en/" class="u-image u-logo u-image-1" data-image-width="1566" data-image-height="400" title="Deltasoft" target="_blank">
   <center><img src="images/28669.jpg" class="u-logo-image u-logo-image-1" style="width: 15%;"></center><br><br></a>
</div>


<body class="align">
<div class="grid">
<form action="#" method="POST" class="form login">
<div class="form__field">
<label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
<input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
</div>
<div class="form__field">
<label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
<input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
</div>
<div class="form__field" >
<input type="submit" name="signin" value="Sign In">
</div>
</form>

</div>
<svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" /></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" /></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" /></symbol></svg>
</body>




<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80520768-2" type="04ce3a9ae1cdc21691e17712-text/javascript"></script>
<script type="04ce3a9ae1cdc21691e17712-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());



 gtag('config', 'UA-80520768-2');
</script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="04ce3a9ae1cdc21691e17712-|49" defer=""></script></body>
</html>


<?php

$db = new mysqli("localhost", "team5DB", "zxLKJg7fO46iLyZx", "team5DB");
     if ($db->connect_error) {
        die("Connection failed: " . $cdb->connect_error);
     }

if(isset(($_POST['signin'])) ){

    $usern=$_POST['username'];
    $pass=$_POST['password'];

    $sql = "SELECT * FROM User WHERE username='$usern' AND password='$pass';";

    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result)==1){
     printf("You have Successfully logged in");

     $_SESSION["username"]=$usern;

     header("Location: Home.php", true, 301);
     exit();
    } 
   else{
    printf( "You have entered an incorrect username or password");
    exit();
   }

}

$db->close();

?>
