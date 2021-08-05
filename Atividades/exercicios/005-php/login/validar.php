<?php 

    //echo "POST";
    //var_dump($_POST);

    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    
    //controle 

    if( $user == "admin" && $password == "123456") {
        echo "<h1>Olá, $user!</h1>";
    }else {
        echo "<h1>Usuario ou senha invalida</h1>";
    }

    echo "<a href=\"index.php\">Voltar</a>";
    echo '<a href="index.php">Voltar</a>';
