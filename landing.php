<?php

$paragraph = $_GET['paragraph'];

$censorship = $_GET['censorship'];

$p_lenght = strlen(str_replace(' ', '', $paragraph));

$paragraph_c = str_replace($censorship, '***', $paragraph);

$pc_lenght = strlen(str_replace(' ', '', $paragraph_c));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <h1>paragrafo:</h1>
    <h3><?php echo $paragraph ?></h3>
    <h5>lenght <?php echo $p_lenght ?></h5>
    <h1>paragrafo censurato:</h1>
    <h3><?php echo $paragraph_c ?></h3>
    <h5>lenght <?php echo $pc_lenght ?></h5>
</body>

</html>