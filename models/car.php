<?php // A model to perform queries to the database

class Car {
    
    private $cs332db; // PDO connection
    
    function __construct($cs332db) {
      $this->cs332db = $cs332db;   
    }
    
    function retrieve($seats) {
        if ($seats != null && in_array($seats, array('1','2', '3','4','5','6','7','8'))) {
            return $this->cs332db->query("select * from cars natural join available_cars where seats = '$seats';");
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
    
    // Make the car avaialable to rent
    function newCar($username, $start_rental, $end_rental, $location) {
        // Retrieve the car_id for the car that was just added to the db
        // Functionality for the future: make a car available that was already available once
        $gid = $this->cs332db->prepare("SELECT MAX(car_id) as maxID FROM cars;");
        $gid->execute();
        $test = $gid->fetch(PDO::FETCH_ASSOC);
        $car_id = $test['maxID'];
        
        // Now update the available cars table
        $addCar = $this->cs332db->prepare("insert into available_cars(username, car_id, start_rental, end_rental, location) values(:username, :car_id, :start_rental, :end_rental, :location)");
        $addCar->bindParam(':username', $username, PDO::PARAM_STR, 20);
        $addCar->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
        $addCar->bindParam(':start_rental', $start_rental);
        $addCar->bindParam(':end_rental', $end_rental);
        $addCar->bindParam(':location', $location, PDO::PARAM_STR, 20);
        
        // Perform the insert
        $addCar->execute();
    }
    
    function rent($car_id, $start_rental, $end_rental) {
      
      // Get the renter's ID
      $user_id = $_SESSION['user_id'];
      $gid = $this->cs332db->prepare("SELECT renter_id from renter where username = :user_id");
      $gid->bindParam(':user_id', $user_id, PDO::PARAM_STR, 20);
      $gid->execute();
      $test = $gid->fetch(PDO::FETCH_ASSOC);
      $renter_id = $test['renter_id'];
      
      $_SESSION['start_rental'] = $start_rental;
      $_SESSION['end_rental'] = $end_rental;
      
      
      // Code to add a car to the rental_history table
      $rent = $this->cs332db->prepare("INSERT INTO rental_history(car_id, renter_id, start_rental, end_rental) values(:car_id, :renter_id, :start_rental, :end_rental);");
      $rent->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
      $rent->bindParam(':renter_id', $renter_id, PDO::PARAM_INT, 20);
      $rent->bindParam(':start_rental', $start_rental);
      $rent->bindParam(':end_rental', $end_rental);
      $rent->execute();
        
      // Remove as an available car
      $insert = $this->cs332db->prepare("DELETE FROM available_cars WHERE car_id = :car_id");
      $insert->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
      $insert->execute();
          
    }
}
