<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>

    </style>
</head>
<body> 
   
    <h1>
      Recommended Books
    </h1>
    <?php
        $books = [
            "Music and Cultural Heritage of the Yorubas",
            "Harvest of Corruption",
            "Scale and Speed"
        ];
    ?>
    <ul>
        <?php foreach($books as $book) {
            echo "<li>{$book}</li>";
        }
        ?>
    </ul>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book; ?> </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>