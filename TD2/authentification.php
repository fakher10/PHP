<?php

$login=$_GET["login"];
$mdp=$_GET["mdp"];

if($login='admin'  && $mdp='admin')
{
   
    echo "<p><strong>Login :</strong> $login</p>";
    echo "vous etes connecte";
}
else
header('Location:authentification.html');
?>