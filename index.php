<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>

    </style>
</head>
<body> 
    <!-- Assignment -->
<!-- Extend the book list from this episode's example to also include and display the release year immediately after the book's title. -->
    <h1>
      Recommended Books
    </h1>
    <?php
        $books = [
            [
               'name'=> "Music and Cultural Heritage of the Yorubas",
               'author'=> "Dr. Ajenifuja",
              'publishUrl'=>  'http://www.jjjjdghs.com',
              'publishYear'=> 2010
            ],
            [
                'name'=>  "Harvest of Corruption",
                'author'=>  "William Shakespare",
                'publishUrl'=> "http://www.jjjjdghs.com",
                'publishYear'=> 1999
            ],
            [
                'name'=> "Scale and Speed",
                'author'=> "Prof. Akinbomi",
                'publishUrl'=> "http://www.jjjjdghs.com",
                'publishYear'=> 2023
            ],
        ];
    ?>
    
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="publishUrl">
                    <?= $book['name']; ?> 
                    ( <?= $book['publishYear']; ?>)
                </a>
              
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>