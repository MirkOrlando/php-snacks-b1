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
var_dump($matches);
