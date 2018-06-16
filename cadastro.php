<?php
    
    if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['telefone']) && isset($_POST['data_nascimento'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];

        $verificar_linhas = "SELECT COUNT (*) AS QTDE FROM funcionario";
        
        $link = mysqli_connect("127.0.0.1", "root", "") or die("Conexão não estabelecida");
        mysqli_select_db($link, "testebd") or die("Tabela não encontrada");
        $id = (((int)mysqli_fetch_assoc($verificar_linhas)) + 1);
        mysqli_query($link, "INSERT INTO `funcionario`(`nome`, `sobrenome`, `telefone`, `data_nascimento`, 'id') VALUES ('$nome', '$sobrenome', '$telefone', '$data_nascimento', '$id')") or die("Erro de registro");

    }
    else{
        echo "Informações insuficientes";
    }



?>