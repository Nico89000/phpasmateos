<?php
 require_once 'vendor/autoload.php';

 use \tabapp\tableaux\TabStat ;
 use \tabapp\divers\Outils ;

 Outils::headerHTML("Exemple de tableaux statistiques");

$monTab = new TabStat ("Part de marché des navigateurs en décembre 2004",
 "Produit", "Nombre de personnes", "Pourcentage");

 $monTab->ajoute ("Autres", 28000);
 $monTab->ajoute ("Microsoft Internet Explorer", 1732000);
 $monTab->ajoute ("Mozilla / Firefox", 186000);
 $monTab->ajoute ("Netscape", 20000);
 $monTab->ajoute ("Opera", 6000);
 $monTab->ajoute ("Safari", 28000);
 $monTab->ajoute ("APPLE", 500000);
 $monTab->ajoute ("Samsung", 5000);

 $monTab->genere(); 

 Outils::footerHTML();

?>