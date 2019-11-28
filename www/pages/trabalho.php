<?php 
    if(file_exists('pages/trabalhos/'.$_GET['nome'].'/index.php')){
        include('pages/trabalhos/'.$_GET['nome'].'/index.php');
    }else{
        include('pages/erro404.php');
    }
?>