<?php
/* 
## Snack 5
Prendere un paragrafo abbastanza 
lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo 
in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$text = 'Lorem ipsum. dolor sit amet consectetur adipisicing elit. Ea et molestiae expedita culpa fuga. nam aliquam eius cum. ipsum eos porro sunt hic perferendis illum. ipsa quaerat consequatur reprehenderit adipisci!';
//var_dump(explode('.', $text));
$paragraphs = explode('.', $text);

?>

<!doctype html>
<html lang="en">

<head>
    <title>snack 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <?php
    foreach ($paragraphs as $p) : ?>
        <p class="ms-2"><?= $p ?></p>
    <?php endforeach ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>