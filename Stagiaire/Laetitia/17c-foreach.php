<?php
// données (Model)
$students = 
[
    [
    'id' => 7,
    'nom' => "Pitz",
    'prenom' => "Mike",
    'email' => "gitweb@cf2m.be",
    'age' => 49,
    ],

    [
    'id' => 9,
    'nom' => "Debot",
    'prenom' => "Raphaël",
    'email' => "rd@cf2m.be",
    'age' => 24,
    ],

    [
    'id' => 12,
    'nom' => "Benois",
    'prenom' => "Bryan",
    'email' => "bb@cf2m.be",
    'age' => 26,
    ],
];
$students = array_reverse($student);
// Controller
// gère les données avant de les envoyer dans la View
// inversion du tableau

// View
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des stagiaires</title>
</head>
<body>
    <h1>Tableau des stagiaires</h1>

    <table>
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>age</th>
        </thead>
        <tbody>
            <?php
            foreach($students as $student){
    echo"$student";
}
            ?>
        </tbody>
    </table>

<?php

var_dump($students);
?>
</body>
</html>