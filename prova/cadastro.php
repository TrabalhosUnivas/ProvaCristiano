<?php

include("conexao.php");

$NOME = @$_POST["NOME"];
$TELEFONE = @$_POST["TELEFONE"];
$ATIVIDADE = @$_POST["ATIVIDADE"];
$REGISTRO = date('Y/m/d h:m:s');
$STATUS = 'espera';

$sql = "INSERT INTO `atendimentos`(`ID`, `NOME`, `TELEFONE`, `ATIVIDADE`, `REGISTRO`, `STATUS`) 
            VALUES (null,'$NOME', '$TELEFONE', '$ATIVIDADE', '$REGISTRO', '$STATUS') ";


$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<script>alert('Cadastrado com sucesso')</script>";
    header('Location: ./atendimento.php');
} else {
    echo "<script>alert('Cadastrado com sucesso')</script>";
    header('Location: ./atendimento.php');
};
