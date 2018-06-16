<?php




    $link = mysqli_connect("127.0.0.1", "root", "") or die("Não Conectado");
    mysqli_select_db($link, "testebd") or die("não foi possivel selecionar BD");
    $consulta = "SELECT * FROM funcionario";
    $registro = "INSERT INTO `funcionario`(`nome`, `sobrenome`, `telefone`, `data_nascimento`, `id`) VALUES ("", "", "", "")";
    $resultado = mysqli_query($link, $consulta) or die("falha na execução da consulta");

    while($exibe = mysqli_fetch_assoc($resultado)){
        echo $exibe['id'].' '.$exibe['nome'].' '.$exibe['sobrenome'].' '.$exibe['telefone'].' '.$exibe['data_nascimento'].'<br>';
    }
   
?>