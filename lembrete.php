<?php
    include "functions.php";

    conectarDB("localhost","root","","agenda");

    $lembretes = consultarSQL("SELECT * FROM lembrete");
    $lembrete;

    if(isset($_POST['salvar'])){
        $lembrete = $_POST['lembrete'];
        $sql = "INSERT INTO lembrete(lembrete) VALUES('$lembrete')"; 
        executarSQL($sql);
        header("Location:index.php");
    }

    if(isset($_GET['id'])){
        global $lembrete;
        $id = $_GET['id'];
        $sql = "SELECT * FROM lembrete WHERE id='$id'";
        $lembrete = consultarSQL($sql);
    }
    if(isset($_POST['atualizar'])){
        $id = $_POST['id'];
        $lembrete = $_POST['lembrete'];
        $sql = "UPDATE lembrete 
                SET lembrete='$lembrete'
                WHERE id='$id'";
        executarSQL($sql);
        header("Location:index.php");        
    }
    if(isset($_GET['confirmaexcluir'])){
        $id = $_GET['confirmaexcluir'];
        $sql = "SELECT * FROM lembrete WHERE id='$id'";
        $lembrete = consultarSQL($sql);
        include "confirma-excluir.php";
    }
    if(isset($_GET['idexcluir'])){
        $id = $_GET['idexcluir'];
        $sql = "DELETE FROM lembrete WHERE id='$id'";
        executarSQL($sql);
        header("Location:index.php");
    }


?>