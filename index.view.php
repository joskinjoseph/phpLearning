<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>
    </style>
</head>
<body> 

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