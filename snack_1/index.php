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
$matches = [
    [
        'home' => 'Pall. Cantù',
        'guest' => 'Olimpia Milano',
        'pnt_home' => '55',
        'pnt_guest' => '60'
    ],
    [
        'home' => 'Pall. Varese',
        'guest' => 'Pall. Cantù',
        'pnt_home' => '59',
        'pnt_guest' => '72'
    ],
    [
        'home' => 'Brescia',
        'guest' => 'Pall. Cantù',
        'pnt_home' => '64',
        'pnt_guest' => '63'
    ],
];
//var_dump($matches);
//var_dump(count($matches));

/* ciclo l'array creato e stampo i risultati */
/* $a = 0;
while ($a < count($matches)) {
    $match = $matches[$a];
    echo $match['home'] . ' - ' . $match['guest'] . ' | ' . $match['pnt_home'] . ' - ' . $match['pnt_guest'];
    echo '<br>';
    $a++;
} */

for ($i = 0; $i < count($matches); $i++) {
    $match = $matches[$i];
    echo $match['home'] . ' - ' . $match['guest'] . ' | ' . $match['pnt_home'] . ' - ' . $match['pnt_guest'];
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
            max-width: 400px;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            margin: 1rem;
            width: calc(100% - 1rem);
        }

        .card {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="home">
                        <div class="team">TEAM 1</div>
                        <div class="points"></div>
                    </div>
                    <div class="guest">
                        <div class="team">TEAM 2</div>
                        <div class="points"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>