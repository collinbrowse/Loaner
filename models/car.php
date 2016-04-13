<?php // A model to perform queries to the database

class Car {
    
    private $cs332db; // PDO connection
    
    function __construct($cs332db) {
        $this->cs332db = $cs332db;   
    }
    
    // Add a new row to the database
    function insert($brand, $model, $year, $mileage, $rating) {
      $brand = trim($_POST['brand']);
      $model = trim($_POST['model']);
      $year = trim($_POST['year']);
      $mileage = trim($_POST['mileage']);
      $rating = trim($_POST['rating ']);
            
      // Sanitize the input
      $insert = $this->cs332db->prepare('INSERT INTO ????(brand, model, year, mileage, rating) values(:brand, :model, :year, :mileage, :rating)');
      $insert->bindParam(':brand', $brand, PDO::PARAM_STR, 20);
      $insert->bindParam(':model', $model, PDO::PARAM_STR, 20);
      $insert->bindParam(':year', $year, PDO::PARAM_INT, 4);
      $insert->bindParam(':year', $mileage, PDO::PARAM_INT, 4);
      $insert->bindParam(':rating', $rating, PDO::PARAM_INT, 4);
      
      // Perform the insert
      $insert->execute();
    }
}
