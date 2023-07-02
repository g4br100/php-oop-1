<?php

require_once __DIR__ . '/models/Movies.php';

$arrayMovie = [

    new Movie('Film 1', 'Horror', 120,'Mario', 17 ),
    new Movie('Film 2', 'Azione', 220 , 'Gino',20),

];

var_dump($arrayMovie)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Movies</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Duration</th>
                <th scope="col">Author</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrayMovie as $movie) : ?>      
            <tr>        
                <td><?php echo $movie->title?></td>
                <td><?php echo $movie->category?></td>
                <td><?php echo $movie->duration?></td>
                <td><?php echo $movie->author?></td>
                <td><?php echo $movie->minAge?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>