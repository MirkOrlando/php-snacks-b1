<?php
/* 
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli 
insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        .container {
            max-width: 400px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .border-gray {
            border: 4px solid gray;
        }

        .border-green {
            border: 4px solid green;
        }
    </style>
</head>

<body>

    <?php
    foreach ($db as $key => $people) : ?>
        <div class="container <?= $key == 'pm' ? 'border-green' : 'border-gray' ?>">
            <?php
            foreach ($people as $person) : ?>
                <p><strong>Name: </strong><?= $person['name'] ?></p>
                <p><strong>Lastname: </strong><?= $person['lastname'] ?></p>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>

</body>

</html>