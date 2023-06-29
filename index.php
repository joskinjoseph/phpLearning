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
            [
               'name'=> "Music and Cultural Heritage of the Yorubas",
               'author'=> "Dr. Ajenifuja",
              'publishUrl'=>  'http://www.jjjjdghs.com'
            ],
            [
                'name'=>  "Harvest of Corruption",
                'author'=>  "William Shakespare",
                'publishUrl'=> "http://www.jjjjdghs.com"
            ],
            [
                'name'=> "Scale and Speed",
                'author'=> "Prof. Akinbomi",
                'publishUrl'=> "http://www.jjjjdghs.com"
            ],
        ];
    ?>
    
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="publishUrl">
                    <?= $book['name']; ?>
                </a>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>