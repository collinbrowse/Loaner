<?php // A model to perform queries to the database

class Car {
    
    private $cs332db; // PDO connection
    
    function __construct($cs332db) {
      $this->cs332db = $cs332db;   
    }
    
    function retrieve($seats) {
        if ($seats != null && in_array($seats, array('1','2', '3','4','5','6','7','8'))) {
            return $this->cs332db->query("select * from cars where seats = '$seats' ORDER BY year;");
        }
    }

    // Add a new row to the database
    function insert($model, $make, $year, $seats, $mileage, $rating, $description) {
      // Sanitize the input
      $insert = $this->cs332db->prepare("insert into cars(model,make,year,seats,mileage,rating,description) values(:model, :make, :year, :seats, :mileage, :rating, :description)");
      $insert->bindParam(':model', $model, PDO::PARAM_STR, 20);
      $insert->bindParam(':make', $make, PDO::PARAM_STR, 20);
      $insert->bindParam(':year', $year, PDO::PARAM_INT, 4);
      $insert->bindParam(':seats', $seats, PDO::PARAM_INT, 20);
      $insert->bindParam(':mileage', $mileage, PDO::PARAM_INT, 4);
      $insert->bindParam(':rating', $rating, PDO::PARAM_INT, 4);
      $insert->bindParam(':description', $description, PDO::PARAM_STR, 20);
      
      // Perform the insert
      $insert->execute();
    }
}
