<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
            
                $num = $_GET["numero"];
                $antecessor = $num -1;
                $sucessor = $num +1;

                print "O número escolhido foi <strong>$num</strong>";
                print "<br>Seu antecessor é <strong>$antecessor</strong>";
                print "<br>Seu sucessor é <strong>$sucessor</strong>";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </p>
    </main>
    
</body>
</html>