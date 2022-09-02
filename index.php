<?php
require_once __DIR__ . ('/classes/movie.php');
require_once __DIR__ . ('/classes/actor.php');

$movies = [];
$movies[] = new Movie('Dracula', 'Horror', 'Todd Browning', 1931, 7.4);
$movies[] = new Movie('Nosferatu', 'Horror', 'F.W. Murnau', 1922, 7.9);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - PHP OOP</title>
</head>

<body>
    <h1>MOVIES</h1>
    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo $movie->getTitle() . " - " . $movie->getGenre() . " - " . $movie->getDirector() . " - " . $movie->getYear() . " - " . $movie->getRating();  ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>