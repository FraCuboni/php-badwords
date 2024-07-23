<?php

$paragraph = $_GET['paragraph'];

$censorship = $_GET['censorship'];


$paragraph = str_replace($censorship, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <h1><?php echo $paragraph ?></h1>
    <php>
</body>

</html>