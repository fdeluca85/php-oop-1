<?php
require_once __DIR__ . '/classes/movie.php';

$movies = [
    new Movie("Titanic", 1997, "James Cameron", "Leonardo DiCaprio", "Drammatico"),
    new Movie("Forrest Gump", 1994, "Robert Zemeckis", "Tom Hanks", "Drammatico"),
];
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
    <h1>Films</h1>
    <?php foreach ($movies as $movie) { ?>
        <div>
            <h2>
                <?php echo $movie->titolo ?>
            </h2>
            <ul>
                <li>
                    <?php echo $movie->anno ?>
                </li>
                <li>
                    <?php echo $movie->regista ?>
                </li>
                <li>
                    <?php echo $movie->attoreProtagonista ?>
                </li>
                <li>
                    <?php echo $movie->genere ?>
                </li>

            </ul>
        </div>


    <?php } ?>

</body>

</html>