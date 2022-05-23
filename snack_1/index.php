<?php
/*
## Snack 1
Creiamo un array contenente le partite
di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 */

/* creo l'array delle partite di campionato */
$games = [
    [
        'home' => 'Pall. Cantù',
        'guest' => 'Olimpia Milano',
        'pnt_home' => 55,
        'pnt_guest' => 60
    ],
    [
        'home' => 'Pall. Varese',
        'guest' => 'Brindisi',
        'pnt_home' => 59,
        'pnt_guest' => 72
    ],
    [
        'home' => 'Brescia',
        'guest' => 'Virtus Bologna',
        'pnt_home' => 64,
        'pnt_guest' => 63
    ],
];
//var_dump($games);
//var_dump(count($games));

/* ciclo l'array creato e stampo i risultati */
/* $a = 0;
while ($a < count($games)) {
    $game = $games[$a];
    echo $game['home'] . ' - ' . $game['guest'] . ' | ' . $game['pnt_home'] . ' - ' . $game['pnt_guest'];
    echo '<br>';
    $a++;
} */

for ($i = 0; $i < count($games); $i++) {
    $game = $games[$i];
    echo $game['home'] . ' - ' . $game['guest'] . ' | ' . $game['pnt_home'] . ' - ' . $game['pnt_guest'];
    echo '<br>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <style>
        .container {
            margin: 2rem auto;
            max-width: 200px;
        }

        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .col {
            margin: 1rem;
            width: calc(100% - 1rem);
        }

        .card {
            display: flex;
            justify-content: space-around;
            text-align: center;
            border: 1px solid black;
        }

        .points,
        .team {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 50px;
        }

        .home {
            background-color: lightblue;
            width: 50%;
        }

        .guest {
            background-color: lightcoral;
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < count($games); $i++) {
                $game = $games[$i];
            ?>
                <div class="col">
                    <div class="card">
                        <div class="home">
                            <div class="team">
                                <?= $game['home'] ?>
                            </div>
                            <div class="points">
                                <?= $game['pnt_home'] ?>
                            </div>
                        </div>
                        <div class="guest">
                            <div class="team">
                                <?= $game['guest'] ?>
                            </div>
                            <div class="points">
                                <?= $game['pnt_guest'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>