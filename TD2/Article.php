<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>article ajouter </title>
</head>
<body>
    <h1>information de l'<article></article></h1>
    <p>reference : <?php echo $_POST['reference']; ?></p>
    <p>libelle : <?php echo $_POST['libelle']; ?></p>
    <p>fournisseur : <?php echo $_POST['fournisseur']; ?></p>
    <p>point vente : <?php echo isset ($_POST['pointDeVente']); ?></p>
    <p>prix : <?php echo $_POST['prix']; ?></p>
    <p>quantite : <?php echo $_POST['quantiteStock']; ?></p>
</body>
</html>






  
   