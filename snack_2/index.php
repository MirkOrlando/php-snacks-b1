<?php
/*
## Snack 2
Passare come parametri GET name, 
mail e age e verificare (cercando i metodi che 
non conosciamo nella documentazione) che 
name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. Se tutto è ok stampare 
“Accesso riuscito”, altrimenti “Accesso negato”
*/

/* inizializzare le variabili per
nome, età e email */
$name = $_GET['name'];
//var_dump($name);
//var_dump(strlen($name) > 3);

$age = $_GET['age']; //intval($_GET['age']);
//var_dump($age);
//var_dump(is_numeric($age));

$email = $_GET['email'];
//var_dump($email);
//var_dump(strpos($email, '@'), strpos($email, '.'));

/* verificare e stampare la risposta */
if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    echo 'accesso consentito';
} else {
    echo 'accesso negato';
}
