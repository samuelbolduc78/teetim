<?php
//inclure le ficihier commun contenant le haut du cide des ecrans des ui
include_once('common/entete.inc.php');
$page = "casquettes";
// ajouter une annotation pour aider intelliphent signifier que la variable $_ est de type stdClass et existe
/** @var stdClass $_ */
?>
        <main class="page-casquettes">
            <article class="amorce">
                <h1><?= $_->amorceH1 ?>  </h1>
            </article>
            <article class="principal">
                <p><?= $_->enConstruction ?></p>
            </article>
        </main>
<?php
//inclure le ficihier p2p contenant le haut du cide des ecrans des ui
include_once('common/p2p.inc.php');
?>