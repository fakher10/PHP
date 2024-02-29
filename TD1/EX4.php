
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
    border-collapse: collapse;
   }
   table,td,th,tr{
    border:2px solid black;
   }
    </style>
<body>
<table>
<tr><th>Nom</th><th>Moyenne</th></tr>
<?php
require 'util.php';

//affichage avec tableau html
foreach($tab as $nom => $moyenne)
{   
    $chaine=getColor($moyenne);
    ?>
    <tr> <td> <?=$nom?> </td><td style="background-color: <?=$chaine?>;"> <?=$moyenne ?></td></tr>
<?php
}
?>