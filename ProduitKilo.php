<?php
	// Création de la classe ProduitKilo
	// la classe mère est requise
	require_once("Produit.php");
	class ProduitKilo extends Produit{
		protected $poids;
		protected $prix_kilo;
		protected $prix_total;
		
		//function constructeur avec passage de paramètres
		public function __construct($poids, $prix_kilo){
			//définir la variable de la classe parent
			//parent::__construct($nb_produits_crees);
			//appeler la fonction statique comptabiliser 
			//Produit::comptabiliser();
			
			$this->poids=$poids;
			$this->prix_kilo=$prix_kilo;
			
			//test comptabiliser le nombre de produits créés
			//$this->nb_produits_crees=$nb_produits_crees+1;
			//Produit::nb_produits_crees->$nb_produits_crees+1;
			//Produit::$nb_produits_crees=++$nb_produits_crees;
			
			
		}
		public function __toString(){
			return $nb_produits_crees;
		}
		public function calcul_prix(){
			$this->prix_total=($this->poids*$this->prix_kilo)/1000;
			return $this->prix_total;
			/*$prix_total=($this->poids*$this->prix_kilo)/1000;
			return $prix_total;*/
		}
		
		//création des modificateurs
		public function modif_poids($poids){
			$this->poids=$poids;
		}
		public function modif_prix_kilo($prix_kilo){
			$this->prix_kilo=$prix_kilo;
		}
		
	}
?>