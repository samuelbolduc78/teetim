<?php
$page = "acceuil";

//inclure le ficihier commun contenant le haut du cide des ecrans des ui
include_once('common/entete.inc.php');
//lire le fichier json contenant les texte
//test
//convertir le json en tableau associatif struct php

// echo $txtArray->acceuil->amorceH2;
        /** @var stdClass $_ */
//documenter (avec phpdoc) les variables $_ pour aider intelliphent avec les hint de code

?>
<main class="page-accueil">
    <article class="amorce">
        <h1> <?= $_->amorceAchat; ?></h1>
        <h2><?=
        /** @var stdClass $txtArray */
       $_->amorceH2;
        ?>
        </h2>
        <h4><?= $_->amorceH4;?> ; ?>
        </h4>
        
    </article>
    <article class="principal">
        <p>
           <?= $_->para1; ?>
        </p>
        <p>
           
        </p>
    </article>
</main>
<?php
//inclure le ficihier p2p contenant le haut du cide des ecrans des ui
include_once('common/p2p.inc.php');
?>