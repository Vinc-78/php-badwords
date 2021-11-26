<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>

<body>

    <?php

    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    Atque delectus fugiat eaque dolorum reprehenderit, suscipit laborum 
    dignissimos obcaecati nisi! Voluptatibus architecto eos itaque unde 
    dignissimos excepturi labore deleniti aliquam saepe?";

    echo $paragraph;
    ?>

    <br> <br>

    <b>La lunghezza del paragrafo è di:</b> <?php echo strlen($paragraph); ?> caratteri

    <br> <br>

    <?php

    var_dump($_GET);
    $string = $_GET['string'];
    echo $string;

    ?>

    <br> <br>

    <?php

    $paragraph = str_replace($string, '***', $paragraph);

    ?>

    <b>Paragrafo censurato:</b> <?php echo $paragraph; ?>



</body>

</html>