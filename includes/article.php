<?php 
	/**
	 * 
	 */
	class Article {
		public function fetch_all(){
			global $pdo; // set as global veriable so we can use it

			$query = $pdo->prepare( "SELECT * FROM articles" );
			$query->execute();

			return $query->fetchAll();
		}
		
	}
 ?>