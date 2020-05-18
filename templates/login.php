<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  </head>
  <body>


    <div class="show-login-btn"><i class="fas fa-sign-in-alt"></i> Show Login Form</div>


    <div class="login-box">
      <div class="hide-login-btn"><i class="fas fa-times"></i></div>
    <form class="login-form" name="frmLogin" action="authenticate.php" method="post">

      <h1>Welcome</h1>
      <input class="txtb" type="text" name="txtid" placeholder="Student ID">
      <input class="txtb" type="password" name="txtpwd" placeholder="Password">
      <input class="login-btn" type="submit" name="btnlogin" value="Login">
    </form>
    </div>


    <script type="text/javascript">
    $(".show-login-btn").on("click",function(){
      $(".login-box").toggleClass("showed");
    });
    $(".hide-login-btn").on("click",function(){
      $(".login-box").toggleClass("showed");
    });
    </script>

  </body>
</html>
