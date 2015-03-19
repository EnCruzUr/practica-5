<?php
session_start();
?>
<html>
<head>
  <center><h1>Login</h1></center>
  <title>Login</title>
</head>
<body>
  <form action="sesion.php" method="POST">
    <fieldset>
      <p>
        <label for="username">Usuario</label>
        <input id="username" type="text" name="username" size="18" />
      </p>
      <p>
        <label for="passwd">Contraseña</label>
        <input id="passwd" type="password" name="password" size="18"  />
      </p>
      <p>
        <label for="remember">Recordar</label>
        <input id="remember" type="checkbox" name="remember" value="yes"/>
        <input type="submit" name="Submit" class="button" value="entrar" />
      </p>
    </fieldset>
  </form>
</body>
</html>