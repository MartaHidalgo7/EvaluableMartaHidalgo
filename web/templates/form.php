<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: black;
            margin-top: 20px;
            background-color: #ff6f61;
            font-size: 40px;
            padding: 10px;
        }

        .form-container {
            margin: 20px auto;
            padding: 20px;
            max-width: 400px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            cursor: pointer;
            border-radius: 20px;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            color: white;
            background-color: #4caf50; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            background-color: #43a047;
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>Refugio Patitas</h1>
    </header>

    <div class="form-container">
        <form action="index.php?action=register" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
