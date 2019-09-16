<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/Estilos_login.css" >
  </head>
  <body id="body_login">



    <form action="index.php?accion=Login" method="post">
      <div class="container">
              <div class="card card-container">
                  <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                  <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                  <p id="profile-name" class="profile-name-card"></p>
                  <form class="form-signin">
                      <span id="reauth-email" class="reauth-email"></span>
                      <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                      <input type="password" name="password"  class="form-control" placeholder="Password" required>
                    
                      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                  </form><!-- /form -->
                  <a href="#" class="forgot-password">
                      Forgot the password?
                  </a>
              </div><!-- /card-container -->
          </div><!-- /container -->

    </form>



  </body>
</html>