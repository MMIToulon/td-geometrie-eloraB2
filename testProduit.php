<?php
	ini_set('display_errors','1');
	require_once("Produit.php");
	//instanciation de la classe
	$test_constructeur= new Produit(45);
	var_dump($test_constructeur);
	
	// Test de changement de numéro pour l'objet $test_constructeur
	$test_constructeur->modif_num(25);
	var_dump($test_constructeur);
?>