<?php
session_start();
if ($_POST["username"]=="root" && $_POST["password"]=="sesion"){
    if (array_key_exists('remember',$_POST)) {
        ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);
        session_regenerate_id(TRUE);
    }
    $_SESSION["usuario"] = $_POST["username"];
    header ("Location: index.php");
}else {
    ?>
    <html>
    <body>
        Error. El Usuario o contraseña son incorrectos
        <a href="login.php">Intentarlo de nuevo</a>
    </body>
    </html>
    <?php
}
?>