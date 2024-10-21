<?php
    include "lembrete.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembretes</title>
</head>
<body>
    <h1>Lembrete Fácil</h1>
    <form action="lembrete.php" method="post">
        <input name="lembrete" type="text" placeholder="Digite seu lembrete" required>
        <button name="salvar" type="submit">Salvar</button>
    </form>
    <?php foreach($lembretes as $lembrete) : ?>
        <p><?=$lembrete[1]?></p>
    <?php endforeach ?>
</body>
</html>