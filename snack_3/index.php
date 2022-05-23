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
            'text' => 'Testo post 1',
            'img' => '<img src="https://picsum.photos/400/200" alt=""/>'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2',
            'img' => '<img src="https://picsum.photos/400/200" alt=""/>'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3',
            'img' => '<img src="https://picsum.photos/400/200" alt=""/>'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4',
            'img' => '<img src="https://picsum.photos/400/200" alt=""/>'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5',
            'img' => '<img src="https://picsum.photos/400/200" alt=""/>'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6',
            'img' => '<img src="https://picsum.photos/400/200" alt=""/>'
        ]
    ],
];

/*    
    foreach ($posts as $post_date => $posts_content) {
        echo '<p>' . $post_date . '</p>';
        foreach ($posts_content as $post_content) {
            //var_dump($post_content);
            foreach ($post_content as $key => $value) {
                echo $key . ' ' . $value;
                echo '<br>';
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
    <style>
        .container {
            max-width: 1200px;
            margin: 2rem auto;
        }

        .row {
            display: flex;
        }

        .col-2 {
            margin: 1rem;
            width: calc(100% / 12 * 6 - 1rem);
        }

        img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php foreach ($posts as $post_date => $posts_content) : ?>
            <div class="row">
                <p><?= $post_date ?></p>
                <?php foreach ($posts_content as $post_content) : ?>
                    <div class="col-2">
                        <?php foreach ($post_content as $key => $value) : ?>
                            <p><strong><?= $key ?>: </strong><?= $value ?></p>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </div>

</body>

</html>