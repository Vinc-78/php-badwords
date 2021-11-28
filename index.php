<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <main>

        <?php

        $paragrafo = "Lorem ipsum dolor sit amet consectetur, 
        adipisicing elit. At earum neque impedit culpa laboriosam 
        vel sunt quia officiis ducimus consequuntur reprehenderit 
        blanditiis vero tenetur, provident enim. 
        Et cupiditate similique accusantium.";
        
        ?>


        <p class="prova"> <?php echo $paragrafo; ?> </p>

        <p class="caratteri"> <strong> Numero di caratteri riportati è 
        <?php echo strlen($paragrafo); ?>
        </strong> </p>


        <?php 

        $par = $_GET['parola'];

        
        $paragrafo = str_replace($par, '***', $paragrafo);

        ?>

        <p>/?parola= <?php echo $par; ?> </p>


        <p class="caratteri"> <strong>TESTO CENSURATO</strong>   </p>


        <p class="prova"> <?php echo $paragrafo; ?> </p>

        <p class="caratteri"> <strong> Nuovo conteggio caratteri : 
        
        <?php echo strlen($paragrafo); ?>
        </strong> </p>
    
    </main>

    
</body>
</html>