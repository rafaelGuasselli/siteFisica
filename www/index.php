<?php include('config.php')?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Origens</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/trabalho.css">
    <link rel="stylesheet" href="css/erro404.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <main>
    <header>
        <nav>
            <div class="botao">
                <a href="home">Inicio</a>
            </div>
            <div class="inputs">
                <input onchange="search()" id="search" type="text" placeholder="Buscar">
            </div>
        </nav>
    </header>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
            include ('pages/'.$url.'.php');
        }else{
            include('pages/erro404.php');
        }
    ?>

    <footer>
        <section>
            <p>Powered By:
                <a href="index.html">
                    @Rafael Guasselli
                </a>
            </p>
            <p>Todos os direitos reservados.</p>
            <p>copyright 2019.</p>
        </section>
    </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/functions.js" type="text/javascript"></script>
</body>

</html>