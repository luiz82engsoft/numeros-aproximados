<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $num = $_REQUEST['num'] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;

            echo"O valor informado foi: $num <br>";
            echo"O antecessor foi: $ant";
            echo"<br>O sucessor será: $suc";        
            ?> 
        </p>
        <button onclick="history.back()">Voltar
    </main>
</body>
</html>