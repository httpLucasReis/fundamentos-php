<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>
    <!--A função require do PHP tem a mesma funcionalidade da função include. se caso o arquivo que você está incluindo não exista 
    ou não seja encontrado, será gerado um Fatal Error erro fatal, paralizando a execução de qualquer script que venha após a linha 
    do require.-->

    <article>
        <?php
            require_once('./header.php');
            require_once('./paragraphs.php');
        ?>
    </article>
    

    <?php
        // Footer 
        require('./footer.php');
    ?>
</body>
</html>