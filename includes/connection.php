<?php 
/**
 * This is where we define the connnection to the DB
 */
try {
	$pdo = new PDO('mysql:host=localhost;dbname=tutorials_cms', 'admin', '');
} catch ( PDOException $e ){
	exit( 'Database error.' );
}
?>
