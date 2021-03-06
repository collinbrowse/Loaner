<?php // A model to perform queries to the database

class Car {
    
    private $cs332db; // PDO connection
    
    function __construct($cs332db) {
      $this->cs332db = $cs332db;   
    }
    
    // Grab all of the cars that are available to rent
    function retrieve($state, $city, $start_rental, $end_rental, $seats) {
      
      // Sanitize the input
      $query = $this->cs332db->prepare("SELECT * FROM status NATURAL JOIN cars WHERE state = :state AND city = :city and start_rental = :start_rental and end_rental = :end_rental and seats = :seats;");
      $query->bindParam(':state', $state, PDO::PARAM_STR, 20);
      $query->bindParam(':city', $city, PDO::PARAM_STR, 20);
      $query->bindParam(':start_rental', $start_rental);
      $query->bindParam(':end_rental', $end_rental);
      $query->bindParam(':seats', $seats, PDO::PARAM_INT, 4);
      
      $query->execute();
      $cars = $query->fetchAll(PDO::FETCH_ASSOC);
      return $cars;
    }
    

    // Add a new row to the database
    function insert($model, $make, $year, $seats, $mileage, $rating, $description, $username) {
      
      // Sanitize the input
      $insert = $this->cs332db->prepare("insert into cars(model,make,year,seats,mileage,rating,description,owner_username) values(:model, :make, :year, :seats, :mileage, :rating, :description, :username)");
      $insert->bindParam(':model', $model, PDO::PARAM_STR, 20);
      $insert->bindParam(':make', $make, PDO::PARAM_STR, 20);
      $insert->bindParam(':year', $year, PDO::PARAM_INT, 4);
      $insert->bindParam(':seats', $seats, PDO::PARAM_INT, 20);
      $insert->bindParam(':mileage', $mileage, PDO::PARAM_INT, 4);
      $insert->bindParam(':rating', $rating, PDO::PARAM_INT, 4);
      $insert->bindParam(':description', $description, PDO::PARAM_STR, 20);
      $insert->bindParam(':username', $username, PDO::PARAM_STR, 20);
      // Perform the insert
      $insert->execute();
    }
    
    // Make the car avaialable to rent
    function newCar( $status,$city, $state, $start_rental, $end_rental ) {
        
        // Get the max car_id because that will be the one that was just entered in the database
        $gid = $this->cs332db->prepare("SELECT MAX(car_id) as maxID FROM cars;");
        $gid->execute();
        $test = $gid->fetch(PDO::FETCH_ASSOC);
        $car_id = $test['maxID'];
        
        // Now update the available cars table
        $addCar = $this->cs332db->prepare("insert into status(car_id, status, city, state, start_rental, end_rental) values( :car_id, :status, :city, :state, :start_rental, :end_rental)");
        $addCar->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
        $addCar->bindParam(':status', $status, PDO::PARAM_STR, 20);
        $addCar->bindParam(':city', $city, PDO::PARAM_STR, 20);
        $addCar->bindParam(':state', $state, PDO::PARAM_STR, 20);
        $addCar->bindParam(':start_rental', $start_rental);
        $addCar->bindParam(':end_rental', $end_rental);
        
        // Perform the insert
        $addCar->execute();
    }
    
    // Allow a user to rent a car
    function rent($username, $car_id, $start_rental, $end_rental, $state, $city) {
      $query = $this->cs332db->prepare("SELECT * from rental_history a join cars b on a.car_id=b.car_id join status c on b.car_id=c.car_id where a.renter_username = :username");
      $query->bindParam(':username', $username, PDO::PARAM_STR, 20);
      $query->execute();
      $num = $query->fetchAll(PDO::FETCH_ASSOC);
      $num_rows = mysql_num_rows($num);
      if($num_rows > 0){
        return FALSE;
      }
      
      // Code to add a car to the rental_history table
      $rent = $this->cs332db->prepare("INSERT INTO rental_history(renter_username, car_id,start_rental, end_rental, state, city) values(:username,  :car_id, :start_rental, :end_rental, :state, :city);");
      $rent->bindParam(':username', $username, PDO::PARAM_STR, 20);
      $rent->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
      $rent->bindParam(':start_rental', $start_rental);
      $rent->bindParam(':end_rental', $end_rental);
      $rent->bindParam(':state', $state, PDO::PARAM_STR, 20);
      $rent->bindParam(':city', $city, PDO::PARAM_STR, 20);
      $rent->execute();

      // Remove as an available car
      $insert = $this->cs332db->prepare('update status set status="R" where car_id=:car_id');
      $insert->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
      return $insert->execute();
      
    }
    
    // Change the status of a car from one of three options: available, rented, or neither
    function changeStatus($car_id,$status ) {
        
      // Change status of car
      $change = $this->cs332db->prepare('update status set status=:status where car_id=:car_id');
      $change->bindParam(':status', $status, PDO::PARAM_INT, 20);
      $change->bindParam(':car_id', $car_id, PDO::PARAM_INT, 20);
      $change->execute();
          
    }
    
    // Return if the renter is currently renting a car
    // This is to make sure that a renter can only ever be renting one car at a time
    function isRenting($username) {
        $query = $this->cs332db->prepare("select count(status) from rental_history natural join cars natural join status where renter_username=:username and status='R';");
        $query->bindParam(':username', $username, PDO::PARAM_STR, 20);
        $query->execute();
        $test = $query->fetch(PDO::FETCH_ASSOC);
        $renting = $test['count(status)'];
        return $renting;
    
    }
    
    // Get the renter history of the currently logged in user
    function getRentalHistory($username) {
      
      // Return all cars that are associated with a specific username
      $query = $this->cs332db->prepare("select max(history_id),model,make,rating,state,city,start_rental,end_rental,status,car_id from rental_history natural join cars natural join status where renter_username=:username group by car_id;");
      $query->bindParam(':username', $username, PDO::PARAM_STR, 20);
      $query->execute();
      $history = $query->fetchAll(PDO::FETCH_ASSOC);
      return $history;
    
    }
    
    // Get all the cars an owner has listed
    function getOwnerCars($username){
      $query = $this->cs332db->prepare("select * from status a join cars b on a.car_id=b.car_id join owner c on b.owner_username=c.owner_username where c.owner_username = :username");
      $query->bindParam(':username', $username, PDO::PARAM_STR, 20);
      $query->execute();
      $ownerCars = $query->fetchAll(PDO::FETCH_ASSOC);
      
      return $ownerCars;
    }
}
