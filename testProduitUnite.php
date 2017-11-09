<?php
	ini_set('display_errors','1');
	require_once("ProduitUnite.php");
	
	//instanciation
	$test_produit_unite = new ProduitUnite(6, 3);
	
	//appel de la fonction calcul_prix
	$test_produit_unite->calcul_prix();
	var_dump($test_produit_unite);
	
	
	//test modification des valeurs
	$test_produit_unite->modif_nb_produit_vendu(12);
	$test_produit_unite->modif_prix_unit(2);
	
	//appel de la fonction calcul_prix
	$test_produit_unite->calcul_prix();
	var_dump($test_produit_unite);
?>