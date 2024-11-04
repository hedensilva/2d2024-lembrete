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
    <h1>
        Lembrete #<?=$lembrete[0][0]?>
    </h1>
    <form method="post" action="lembrete.php">
        <input 
            type="hidden" 
            name="id"
            value="<?=$lembrete[0][0]?>"
        >
        <input 
            name="lembrete" 
            type="text"
            value="<?=$lembrete[0][1]?>"
        >
        <button 
            type='submit' 
            name='atualizar'
        >
            Atualizar
        </button>
        <a href="lembrete.php?confirmaexcluir=<?=$lembrete[0][0]?>">
            <button type='button'>
                Excluir
            </button>
        </a>
    </form>
</body>
</html>