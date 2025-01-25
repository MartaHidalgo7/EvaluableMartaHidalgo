<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patitas</title>
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
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px;
            flex-wrap: wrap;
            
        }
        .card {
            margin-top:50px;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            overflow: hidden;
            background-color: #ff6f61;
        }
        .card img {
            width: 100%;
            height: 200px; 
            object-fit: cover;  
            border-bottom: 1px solid black;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 10px 0;
            color: #333;
        }
        .card p {
            padding: 0 10px;
            color: black;
          
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
        .register-link {
            text-decoration:none;
            background-color:yellow;
            border: 3pt solid black;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color:black;
        }
        
    </style>
</head>
<body>
    <h1>Bienvenido a Refugio Patitas Invitado</h1>
    <a href="form.php" class="register-link"><strong>REGISTRATE AQUÍ</strong></a>
    <div class="container">
        <div class="card">
            <img src="../media/perrito1.jpg" alt="Perrito 1">
            <h3>CORA</h3>
            <p>Este es un perrito amigable esperando un hogar, ¡adopta ahora!</p>
        </div>
        <div class="card">
            <img src="../media/perrito.jpg" alt="Perrito 2">
            <h3>SIRA</h3>
            <p>Con mucha energía y amor para dar, ¡adopta ahora!</p>
        </div>
        <div class="card">
            <img src="../media/perrito2.jpg" alt="Perrito 3">
            <h3>THANOS</h3>
            <p>Un fiel compañero buscando a su familia ideal, ¡adopta ahora!</p>
        </div>
    </div>

    <form action="../index.php?action=logout" method="POST">
        <button type="submit" class="logout-btn"><strong>CERRAR SESIÓN</strong></button>
    </form>

</body>
</html>
