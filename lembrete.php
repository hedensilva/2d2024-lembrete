<?php
    include "functions.php";

    conectarDB("localhost","root","","agenda");

    $lembretes = consultarSQL("SELECT * FROM lembrete");

    if(isset($_POST['salvar'])){
        $lembrete = $_POST['lembrete'];
        $sql = "INSERT INTO lembrete(lembrete) VALUES('$lembrete')"; 
        executarSQL($sql);
        header("Location:index.php");
    }
?>