<?php
	ini_set('display_errors','1');
	require_once("ProduitKilo.php");
	
	//instanciation de la classe
	//Attention ! La fonction calcul_prix est prévue pour recevoir un poids en GRAMMES.
	//En instanciant la classe veuillez entrer un poids en grammes. 
	$test_produit_kilo = new ProduitKilo(1500, 3);
	
	//appel de la fonction calcul_prix, sinon la variable prix_total reste nulle
	$test_produit_kilo->calcul_prix();
	var_dump($test_produit_kilo);
	
	//test de changement de valeurs dans les variables
	$test_produit_kilo->modif_poids(2000);
	$test_produit_kilo->modif_prix_kilo(2);
	$test_produit_kilo->calcul_prix();
	var_dump($test_produit_kilo);
?>