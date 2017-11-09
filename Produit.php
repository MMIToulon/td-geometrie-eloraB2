<?php
	// Création de la classe Produit
	abstract class Produit{
		//attribution d'un attribut pour voir si la classe produit fonctionne. 
		protected $num;
		protected $nb_produits_crees;
		
		public function __construct($num){
			$this->num=$num;
			//test incrémentation du nombre de produits créés.
			//$this->nb_produits_crees=$nb_produits_crees+1;
			//Produit::nb_produits_crees->$nb_produits_crees+1;
			//Produit::$nb_produits_crees=++$nb_produits_crees;
		}
		
		public function __tString(){
			echo $num;
		}
		
		//on rajoute la fonction abstraite calcul_prix;
		public abstract function calcul_prix();
		
		
		//Modifieurs pour la valeur numéro
		public function modif_num($num){
			$this->num=$num;
		}
		
		// créer le compteur de produits
		/*public static function comptabiliser(){
			$this->nb_produits_crees=++$nb_produits_crees;
		}*/
	}
?>