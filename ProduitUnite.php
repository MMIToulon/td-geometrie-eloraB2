<?php
	// Création de la classe ProduitKilo
	// la classe mère est requise
	require_once("Produit.php");
	
	class ProduitUnite extends Produit{
		protected $nb_produit_vendu;
		protected $prix_unit;
		protected $prix_par_produit;
		
		
		//le constructeur doit recevoir les variables nb_produit_vendu et prix_unit pour pouvoir créer un produit auquel on puisse appliquer la fonction calcul_prix.
		public function __construct($nb_produit_vendu, $prix_unit){
			$this->nb_produit_vendu=$nb_produit_vendu;
			$this->prix_unit=$prix_unit;
		}
		public function __toString(){
			return $nb_produit_vendu;
		}
		public function calcul_prix(){
			$this->prix_par_produit=$this->prix_unit/$this->nb_produit_vendu;
			return $this->prix_par_produit;
		}
		
		//création des modificateurs
		public function modif_nb_produit_vendu($nb_produit_vendu){
			$this->nb_produit_vendu=$nb_produit_vendu;
		}
		public function modif_prix_unit($prix_unit){
			$this->prix_unit=$prix_unit;
		}
		
	}
?>