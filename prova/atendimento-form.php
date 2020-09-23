<?php

include("conexao.php");
$ID = $_POST["ID"];
$btn = $_POST["btn"];

if ($btn == "atender") {
    $now = date('Y/m/d h:m:s');
    $sql = "UPDATE atendimentos SET  STATUS = 'atendido', ATENDIMENTO = '$now'  WHERE ID = '$ID'";
    $query = mysqli_query($conexao, $sql);

    if ($query) {
        echo "<script>alert('Atendido com sucesso')</script>";
        header('Location: ./atendimento.php');
    } else {
        echo "<script>alert('erro ao ser atendido')</script>";
        header('Location: ./atendimento.php');
    }
} else if ($btn == 'cancelar') {
    $sql = "UPDATE atendimentos SET  STATUS = 'cancelado'  WHERE ID = '$ID'";
    $query = mysqli_query($conexao, $sql);

    if ($query) {
        echo "<script>alert('Atendido com sucesso')</script>";
        header('Location: ./atendimento.php');
    } else {
        echo "<script>alert('erro ao ser atendido')</script>";
        header('Location: ./atendimento.php');
    }
}
