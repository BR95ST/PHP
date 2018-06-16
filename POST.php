<?php
    if(isset($_POST["pnome"]) && isset($_POST["snome"]) && isset($_POST["id"]) && isset){
        $pnome = $_POST["pnome"];
        $snome = $_POST["snome"];

        echo "Olá $pnome $snome";
    }
    else{
        echo "Digite seu nome";
    }

?>