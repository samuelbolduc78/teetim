<?php
//choix langue=
//un par defaut == fr
print_r($_GET);
$langue = "fr";
//afficher les param url(querystring)
if(isset($_GET['lang'])) {
    $langue = $_GET["lang"];
}
//choix 2 = en
//utilisateur clic sur bouton langue, chnager la variable au code de langue selectionne
//lire le fichier json contenant les texte

//si util a fait choix langue par un choix de langue par le passer, garder ce choix de langue (temoin http ou cookies) alors changer var au code de langue sauvegarder
$txtJSON = file_get_contents('e18n\txt-' . $langue . '.json');
//test
//convertir le json en tableau associatif struct php
$txtArray = json_decode($txtJSON);

// echo $txtArray->acceuil->amorceH2;
//creer qulqu raccourcie pour section 
//tt les texte specifique contenue page
//var page existe dans contexte car definie avant inclusion de ce fichier
$_ = $txtArray -> $page;
//raccourcie : txt entete
$_ent = $txtArray -> entete;

$_p2p = $txtArray -> p2p;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;900&family=Noto+Serif:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <div class="conteneur">
        <header>
            <nav class="barre-haut">
                <a class="" href="index.php?lang=fr">fr</a>
                <a class="" href="index.php?lang=en">en</a>
            </nav>
            <nav class="barre-logo">
                <label for="cc-btn-responsive" class="material-icons burger">menu</label>
                <a class="logo" href="index.php"><img src="images/logo.png" alt="Accueil"></a>
                <a class="material-icons panier" href="panier.php">shopping_cart</a>
                <input class="recherche" type="search" name="motscles" placeholder="">
            </nav>
            <input type="checkbox" id="cc-btn-responsive">
            <nav class="principale">
                <label for="cc-btn-responsive" class="menu-controle material-icons">close</label>
                <a href="teeshirts.php"><?= $_ent->NavPeincipale->navTee; ?></a>
                <a href="casquettes.php"><?= $_ent->NavPeincipale->navCasquette; ?></a>
                <a href="hoodies.php"><?= $_ent->NavPeincipale->navHoodie; ?></a>
                <span class="separateur"></span>
                <a href="aide.php"><?= $_ent->NavPeincipale->navAide; ?></a>
                <a href="apropos.php"><?= $_ent->NavPeincipale->navAPropos; ?></a>
            </nav>
        </header>