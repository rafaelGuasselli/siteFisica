<?php 
    if(file_exists('trabalhos/'.$_GET['nome'].'/index.php')){
        include('trabalhos/'.$_GET['nome'].'/index.php');
    }else{
        include('pages/erro404.php');
    }
?>