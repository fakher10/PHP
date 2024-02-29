<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des étudiants</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php

$tab = array(
    "Fakher" => 15,
    "Safa" => 8,
    "Ahmed" => 12,
  
);


echo "<table>";
echo "<tr><th>Nom</th><th>Moyenne</th></tr>";
foreach ($tab as $nom => $moyenne) {
    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td style='background-color: " . getColor($moyenne) . ";'>$moyenne</td>";
    echo "</tr>";
}
echo "</table>";


function getColor($moyenne) {
    return ($moyenne < 10) ? "red" : "green";
}
?>