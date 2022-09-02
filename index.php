<?php 
    require_once __DIR__ . ('/classes/movie.php');

    $dracula = new Movie ('Dracula', 'Horror', 'Todd Browning', 1931, 7.4);
    $nosferatu = new Movie ('Nosferatu', 'Horror', 'F.W. Murnau', 1922, 7.9);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>MOVIES</h1>
    <ul>

    </ul>
</body>
</html>