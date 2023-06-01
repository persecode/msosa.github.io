<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
 <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="display_background_login display_full ">
      <div class="login_container login_background_container">
        <div class="login-titulo">Bienvenido</div>
        <form class="login-form" action="datos_login.php" method="post">
          <input class="login-input" type="text" name="username" placeholder="Username" required>
          <input class="login-input" type="password" name="password" placeholder="Password" required>
          <input class="login-btn" type="submit" value="Ingresar">
        </form>
      </div>
    </div>
  </body>
</html>
