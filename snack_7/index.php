<?php
/*
## Snack 7
Creare un array contenente
qualche alunno di un’ipotetica
classe. Ogni alunno avrà Nome,
 Cognome e un array contenente
 i suoi voti scolastici. Stampare Nome,
 Cognome e la media dei voti di ogni alunno.
*/


/* creare l'array students */
$students = [
    [
        'name' => 'Claudio',
        'lastname' => 'Savino',
        'votes' => [7, 9, 7, 5, 8]
    ],
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'votes' => [3, 6, 5, 6, 6]
    ],
    [
        'name' => 'Francesca',
        'lastname' => 'Bianchi',
        'votes' => [7, 8, 8, 10, 8]
    ],
    [
        'name' => 'Giulia',
        'lastname' => 'Verdi',
        'votes' => [6, 7, 6, 7, 5]
    ],

];
//var_dump($students);

for ($i = 0; $i < count($students); $i++) {
    $student = $students[$i];
    //var_dump($student['votes']);
    $average = array_sum($student['votes']) / count($student['votes']);
    //var_dump($student['name'], $student['lastname'], $average);
    echo '<p><strong>Nome:</strong> ' . $student['name'] . '</p>';
    echo '<p><strong>Cognome:</strong> ' . $student['lastname'] . '</p>';
    echo '<p><strong>Media voti:</strong> ' . $average . '</p>';
    echo '<hr>';
};
