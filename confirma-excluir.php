<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembrete Fácil</title>
</head>
<body>
    <h1>Lembrete Fácil</h1>
    <p>
        Tem certeza que deseja excluir o lembrete: 
        <span style='color:blue'><?=$lembrete[0][1]?></span> 
        permanentemente?
    </p>
    <p> 
        <a href="lembrete.php?idexcluir=<?=$lembrete[0][0]?>">
            <button type='button'>
                Sim
            </button>
        </a>
        <a href="index.php">
            <button type='button'>
                Não
            </button>
        </a>
        
    </p>
</body>
</html>