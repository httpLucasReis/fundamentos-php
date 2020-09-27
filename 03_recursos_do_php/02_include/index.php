<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <!-- só permitirem a inclusão do arquivo uma única vez na página e ignorando caso você chame ela mais vezes sem notar.-->
    <article>
        <?php
            include_once('./header.php');
            include_once('./paragraphs.php');
        ?>
    </article>
    
    <!-- A função include tem como objetivo incluir um arquivo dentro do outro quando acessado. Caso não seja possível incluir o arquivo a exibição da página irá continuar normalmente-->
    <?php
        // Footer 
        include('./footer.php');
    ?>
</body>
</html>