<?php
    if(isset($_POST["produto"]) && $_POST["email"]){
        $produto = $_POST["produto"];
        $email = $_POST["email"];
    
        echo "Produto: $produto, E-mail: $email";
    }
    else{
        echo " não deu certo";
    }

?>