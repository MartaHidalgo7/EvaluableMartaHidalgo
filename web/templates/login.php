

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
 
    <form action="index.php?action=login" method="POST">
        <input type="hidden" name="user" value="true">
        <button type="submit">Entrar como Usuario</button>
    </form>  

    <form action="index.php?action=login" method="POST">
        <input type="hidden" name="admin" value="true">
        <button type="submit">Entrar como Admin</button>
    </form>   
</body>
</html>