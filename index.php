<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>

    </style>
</head>
<body> 
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
            [
                'name'=> "Becoming a Musician",
                'author'=> "Prof. Akinbomi",
                'publishUrl'=> "http://www.jjjjdghs.com",
                'publishYear'=> 2015
            ],
        ];
        function fliterByAuthor($books, $author) {
            $filterBooks = [];

            
            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filterBooks[] = $book;
                }
            }
            return $filterBooks;
        }
    ?>
    
    <ul>
        <?php foreach (fliterByAuthor($books, 'William Shakespare') as $book) : ?>
            <li>
                <a href="publishUrl">
                    <?= $book['name']; ?> 
                    ( <?= $book['publishYear']; ?>) - By <?= $book['author']; ?>
                </a>
                </a>
            </li>
            <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach (fliterByAuthor($books, 'Prof. Akinbomi') as $book) : ?>
            <li>
                <a href="publishUrl">
                    <?= $book['name']; ?> 
                    ( <?= $book['publishYear']; ?>) - By <?= $book['author']; ?>
                </a>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>