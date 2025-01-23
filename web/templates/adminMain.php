<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Refugio patitas usuario administrador</title>
        <style>
     body {
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            text-align: center;
        }
        h1 {
            color:black;
            margin-top: 20px;
            background-color: #ff6f61;
            font-size:40px;
        }
        .logout-btn {
            margin: 20px 0;
            background-color:yellow;
            border: 3pt solid black;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color:black;
        }
        .logout-btn:hover {
            opacity:70%;
        }

        .button-adm{
        background-color: #ff6f61;
        border-radius:20px;
        padding:20px;
        cursor:pointer;
        transition: background-color 0.3s ease;
        }
        </style>
</head>
<body>
<h1>Bienvenido a Refugio Patitas Administrador</h1>   
<div class="container-button">
<button class="button-adm"><strong>AÑADE PERROS A LA PÁGINA</strong></button>
<button class="button-adm"><strong>QUITAR PERROS A LA PÁGINA</strong></button>
<button class="button-adm"><strong>ACTUALIZAR DATOS</strong></button>
</div>  
</body>
</html>


<form action="../index.php?action=logoutAdmin" method="POST">
        <button type="submit" class="logout-btn"><strong>CERRAR SESIÓN</strong></button>
</form>