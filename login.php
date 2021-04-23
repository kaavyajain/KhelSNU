<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./style_l.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Headland+One">
</head>
<body>
    <div id="bg">
        <img src="./images/logo.png">
        <div id="linkscontainer">
            <a href="./index.html" class="linked">HOME</a>
            <a href="./SportOffered.html" class="linked">SPORTS OFFERED</a>
            <a href="#" class="linked">TRAINERS</a>
            <a href="http://localhost/contact_us.php" class="linked">REACH US</a>
            <br>
        </div>
    <section class="forms-section">
  
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form class="form form-login">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" name="email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" name="password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" name="submit" class="btn-login">Login</button>
        <?php
        include("connect.php");
        session_start();
    if(isset($_REQUEST['submit']))
    {
              $sql=$sql="select * from admin where email='".$_REQUEST['email']."'AND password='".$_REQUEST['password']."';";
        $result = mysqli_query($db,$sql);
        if(mysqli_num_rows($result))
        {
            $_SESSION['email']=$_REQUEST['email'];
             header('Location:admin_dash.php');
        }
        else{ echo "<h5 align='center' style='color:#131b3f; padding: 0px 0; font-family: Headland One, serif;'>wrong username or password <h5>";
         }
    }
    ?>
      </form>
    </div>
  </div>
</section>
    </div>
</body>
</html>

    
 