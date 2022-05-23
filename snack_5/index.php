<?php
/* 
## Snack 5
Prendere un paragrafo abbastanza 
lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo 
in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptatem impedit minima quidem nostrum! Dicta ducimus optio velit molestiae, eveniet non perspiciatis, ex eum eaque excepturi quae nesciunt ea esse magnam. Id commodi vero, quis ad ipsam similique illo repellat labore explicabo officia doloremque placeat exercitationem, atque voluptas quo. Neque minima maiores magnam incidunt cumque delectus perferendis, porro soluta, veritatis adipisci accusamus quas eligendi repudiandae excepturi. Praesentium excepturi accusantium consequuntur aliquam? Rem officia recusandae consequatur fugit sequi. Voluptatum voluptate a dignissimos, reiciendis ipsa amet dolore nesciunt, tempore iusto ipsum animi exercitationem iure velit natus! Consequuntur amet officiis quia deleniti necessitatibus rerum, veniam, eveniet modi beatae error nisi sunt reiciendis iusto iure itaque quo quos temporibus expedita minima, impedit ullam doloremque magnam ipsam numquam! Atque dolores magni consequuntur autem saepe molestiae eius perferendis, architecto nostrum iure ratione nam incidunt placeat! Temporibus quam numquam commodi, ipsam sapiente expedita architecto odit aperiam ducimus corrupti voluptatum id voluptas vitae saepe adipisci. Non nostrum, dolorum eos, ipsam dignissimos, porro nobis saepe laudantium distinctio numquam magni perspiciatis accusantium inventore rerum odit perferendis voluptate hic dolores sequi quis placeat molestiae. Incidunt iusto id reprehenderit magnam perspiciatis eum velit delectus corrupti quas cum ducimus, voluptas quo rerum expedita.';
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

    <!-- Bootstrap CSS v5.1.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        p {
            text-align: justify;
        }
    </style>

</head>

<body>

    <h1>Paragraphs</h1>
    <?php
    foreach ($paragraphs as $p) : ?>
        <p class="mx-2"><?= $p ?>.</p>
    <?php endforeach ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>