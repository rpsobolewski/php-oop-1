<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Film</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Elenco Film</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Regista</th>
                    <th>Anno</th>
                    <th>Generi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include('db.php');
                foreach ($movies as $movie) {
                    echo "<tr>";
                    echo "<td>{$movie->title}</td>";
                    echo "<td>{$movie->director}</td>";
                    echo "<td>{$movie->year}</td>";
                    echo "<td>" . implode(', ', $movie->genres) . "</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>