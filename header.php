<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeçalho</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .header {
            display: flex;
            align-items: center;
            background-color: #12111E;
            padding: 10px 20px;
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .logo img {
            width: 200px;
            height: 50px;
            margin-left: 10px;
        }

        .nav-list {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #12111E;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 90px;
        }

        .nav-list a {
            padding: 8px 8px 1px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .nav-list a:hover {
            color: #FE8F1E;
        }

        .nav-list .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .hamburger {
            font-size: 30px;
            cursor: pointer;
            color: white;
            display: flex;
            align-items: center;
        }
        
    </style>
</head>
<body>

    <div class="header">
        <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
        <div class="logo">
          <img src="img/logo.png" alt="Logo">
        </div>
    </div>

    <div id="myNav" class="nav-list">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
        <a href="bacia.php">Bacia</a>
        <a href="campo.php">Campos</a>
        <a href="pocos.php">Poços</a>
        <a href="perfil.php">Perfil</a>
        <a href="logistica.php">Logística</a>
        <a href="historico.php">Historico</a>
        <a href="sobre_nos.php">Sobre</a>
    </div>

    <script>
        function toggleMenu() {
            var nav = document.getElementById("myNav");
            if (nav.style.width === "250px") {
                nav.style.width = "0";
            } else {
                nav.style.width = "250px";
            }
        }
    </script>
</body>
</html>
