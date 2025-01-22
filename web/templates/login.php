

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
 

    <form action="index.php?action=login" method="POST">
        <input type="hidden" name="guest" value="true">
        <button type="submit">Entrar como Invitado</button>
    </form>

    <?php
    if (isset($_COOKIE['guest_session']) && $_COOKIE['guest_session'] === "true") {
        echo "El usuario está logueado como invitado.";
    } else {
        echo "El usuario no está logueado como invitado.";
    }
     if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>


    <form action="index.php?action=logout" method="POST">
        <button type="submit">Cerrar sesion</button>
    </form>
     
</body>
</html>