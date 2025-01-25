

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            text-align: center;
            
        }

        h1 {
            color: black;
            margin-top: 20px;
            background-color: #ff6f61;
            font-size: 40px;
            padding: 10px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px; 
            margin-top: 30px;
        }

        button {
            cursor: pointer;
            border-radius: 20px;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

    
        .guest {
            background-color: #fbbf24; 
        }

        .guest:hover {
            background-color: #f59e0b;
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .user {
            background-color: #f472b6; 
        }

        .user:hover {
            background-color: #ec4899;
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .admin {
            background-color: #ef4444; 
        }

        .admin:hover {
            background-color: #dc2626;
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>Refugio Patitas</h1>
        <h2>Elige el modo en el que deseas entrar</h2>
    </header>
    <div class="button-container">
        <form action="index.php?action=login" method="POST">
            <input type="hidden" name="guest" value="true">
            <button type="submit" class="guest">Entrar como Invitado</button>
        </form>
    
        <form action="index.php?action=login" method="POST">
            <input type="hidden" name="user" value="true">
            <button type="submit" class="user">Entrar como Usuario</button>
        </form>  
    
        <form action="index.php?action=login" method="POST">
            <input type="hidden" name="admin" value="true">
            <button type="submit" class="admin">Entrar como Admin</button>
        </form>
    </div>
</body>
</html>
