<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>

    </style>
</head>
<body> 
    //Creating my own Array and playing around with it....
  <?php 
    $pupils = [
        [
            'name'=> 'Akin James',
            'class'=> 4,
            'age'=> 9,
            'yearOfAdmin'=> 2016,
            'genotype'=> 'AS',
            'studentLink'=> 'http://deyplay.com'
        ],
        [
            'name'=> 'Tope Ige',
            'class'=> 4,
            'age'=> 10,
            'yearOfAdmin'=> 2017,
            'genotype'=> 'SS',
            'studentLink'=> 'http://deyplay.com'
        ],
        [
            'name'=> 'John Wick',
            'class'=> 7,
            'age'=> 10,
            'yearOfAdmin'=> 2014,
            'genotype'=> 'AS',
            'studentLink'=> 'http://deyplay.com'
        ],
        [
            'name'=> 'Michael Jackson',
            'class'=> 7,
            'age'=> 9,
            'yearOfAdmin'=> 2016,
            'genotype'=> 'AA',
            'studentLink'=> 'http://deyplay.com'
        ],
        [
            'name'=> 'Chris Tucker',
            'class'=> 6,
            'age'=> 8,
            'yearOfAdmin'=> 2015,
            'genotype'=> 'AS',
            'studentLink'=> 'http://deyplay.com'
        ],
        [
            'name'=> 'Idiot James',
            'class'=> 6,
            'age'=> 7,
            'yearOfAdmin'=> 2015,
            'genotype'=> 'AA',
            'studentLink'=> 'http://deyplay.com'
        ],
        
    ];

    $filterPupils = array_filter($pupils, function ($pupil) {
        return $pupil['age'] <= 9;
    });
   ?>
    <ul>
        <?php foreach ($filterPupils as $pupil) : ?>
            <li>
                <a href="studentLink">
                    <?= $pupil['name']; ?> 
                    ( <?= $pupil['yearOfAdmin']; ?>) - Class <?= $pupil['class']; ?>
                </a>

            </li>
            <?php endforeach; ?>
    </ul>

   
</body>
</html>