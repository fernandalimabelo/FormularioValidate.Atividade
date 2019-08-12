<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $sexo = $_POST ["sexo"];
    }

    echo "Olá " .$nome."<br>"; 

    if($sexo == "M"){
        echo "Seja Bem-Vindo ao Nosso Site";
    }elseif($sexo == "O"){
        echo "Seja Bem-Vindo(a) ao Nosso Site";
    }else{
        echo "Seja Bem-Vinda ao Nosso Site";
    }

?>