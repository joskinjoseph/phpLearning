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
                'publishYear'=> 2055
            ],
        ];


    //    function filter($items, $fn) {
    //         $filteredItems = [];

            
    //         foreach ($items as $item) {
    //             if ($fn($item)) {
    //                 $filteredItems[] = $item;
    //             }
    //         }
    //         return $filteredItems;
    //     };

        $filterBooks =   array_filter ($books, function ($books) {
            return $books['author'] ===  'Prof. Akinbomi';
        });
    ?>
    
   
    <ul>
        <?php foreach ($filterBooks as $book) : ?>
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