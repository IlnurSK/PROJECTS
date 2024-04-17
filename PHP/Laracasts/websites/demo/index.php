<!--Laracasts - Associative Arrays -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<h1>
    Recommended Books
</h1>
<?php
$books = [
    "name" => "Do Androids Dream of Electric Sheep",
    "The Langoliers",
    "Project Hail Mary",
];

?>

<p>
    <?= $books["name"] ?>
</p>

</body>
</html>