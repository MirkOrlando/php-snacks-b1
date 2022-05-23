<?php
/* 
## Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave 
una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

/* 
    foreach ($posts as $post_date => $posts_content) {
        //var_dump($posts_content);
        foreach ($posts_content as $post_content) {
            //var_dump($post_content);
            foreach ($post_content as $key => $value) {
                var_dump($key);
                var_dump($value);
            }
        }
    }
*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>

    <?php
    foreach ($posts as $post_date => $posts_content) : ?>
        <p><?= $post_date ?></p>
        <?php
        foreach ($posts_content as $post_content) : ?>
            <?php
            foreach ($post_content as $key => $value) : ?>
                <p><strong><?php $key ?>: </strong><?php $value ?></p>
            <?php endforeach ?>
        <?php endforeach ?>
    <?php endforeach ?>

</body>

</html>