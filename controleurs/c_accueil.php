<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    Delphine Thoumi Adam
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */


$profil = filter_input(INPUT_GET, 'profil', FILTER_SANITIZE_STRING);

if(isset($_SESSION['visiteurSelectionne'])){
    unset($_SESSION['visiteurSelectionne']);
}
if(isset($_SESSION['moisSelectionne'])){
    unset($_SESSION['moisSelectionne']);
}

if ($estConnecte) {
    if($estComptable)
    {
        if($profil == 'afficher') {
            ?>
<div class ="alert alert-success" role="alert">
<p>Vous êtes connecté(e) en tant que comptable
</p>
</div>
<?php
}
include 'vues/comptable/c_accueilComptable.php';
    }
    else{
    if($profil == 'afficher') {
            ?>
<div class ="alert alert-success" role="alert">
<p>Vous êtes connecté(e) en tant que visiteur
</p>
</div>
<?php

}
    include 'vues/visiteur/v_accueil.php';
}
}
else
{
    include 'vues/v_connexion.php';
}


