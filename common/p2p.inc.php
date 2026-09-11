 <footer>
    
            <h2>teeTIM</h2>
            <div class="contenu">
                <section class="achats">
                    <h3><?=  $_p2p->achat->titre;?></h3>
                    <nav>
                        <a href="faq.php" class="faq"><?= $_p2p->achat->navFaq; ?></a>
                        <a href="livraison.php" class="livraison"><?= $_p2p->achat->navLivraison; ?></a>
                        <a href="conditions.php" class="conditions"><?= $_p2p->achat->navCondition; ?></a>
                        <a href="confidentialite.php" class="confidentialite"><?= $_p2p->achat->navConfid; ?></a>
                    </nav>
                </section>
                <section class="apropos">
                    <h3>À propos de teeTIM</h3>
                    <nav>
                        <a href="compagnie.php" class="faq">La compagnie</a>
                        <a href="equipe.php" class="livraison">L'équipe</a>
                        <a href="emploi.php" class="conditions">Emplois</a>
                    </nav>
                </section>
                <section class="coordonnees">
                    <h3>Nous joindre</h3>
                    <nav>
                        <span>Sans frais : <b>1 866 888 6666</b></span>
                        <span>Courriel : aide@teetim.ca</span>
                    </nav>
                </section>
            </div>
            <p class="da">&copy; Tous droits réservés, teeTIM 2023-<?php
            echo date('Y');
            ?></p>
            
        </footer>
    </div>
</body>
</html>