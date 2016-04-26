<?php

class User {
    
    private $db; // PDO connection
    private $username, $password; // Credentials offered
    
    function __construct($db, $username, $password) {
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
    }
    
    // Attempt to add this user and return whether it worked
    function register($type) {
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        $insert = $this->db->prepare('insert into users(username,type,password) values(:username,:type,:password)');
        $insert->bindParam(':username', $this->username, PDO::PARAM_STR);
        $insert->bindParam(':type', $type, PDO::PARAM_STR);
        $insert->bindParam(':password', $hash, PDO::PARAM_STR);
        return $insert->execute();
    }
    
    // Attempt to add this user and return whether it worked
    function registerAdditional($first, $last, $age) {
        if($this->type == 'renter'){
        $insert = $this->db->prepare('insert into renter(first,last,age,username) values(:first,:last,:age,:username)');
        $insert->bindParam(':first', $first, PDO::PARAM_STR);
        $insert->bindParam(':last', $last, PDO::PARAM_STR);
        $insert->bindParam(':age', $age, PDO::PARAM_INT);
        $insert->bindParam(':username', $this->username, PDO::PARAM_STR);
        return $insert->execute();
        }
        elseif($this->type == 'owner'){
        $insert = $this->db->prepare('insert into owner(first,last,age,username) values(:first,:last,:age,:username)');
        $insert->bindParam(':first', $first, PDO::PARAM_STR);
        $insert->bindParam(':last', $last, PDO::PARAM_STR);
        $insert->bindParam(':age', $age, PDO::PARAM_INT);
        $insert->bindParam(':username', $this->username, PDO::PARAM_STR);
        return $insert->execute();
        }
        
    }
    
    // Attempt to return the ID of this user
    function login() {
        $select = $this->db->prepare('select * from users where username=:username');
        $select->bindParam(':username', $this->username, PDO::PARAM_STR);
        $select->execute();
        
        $row = $select->fetch(PDO::FETCH_ASSOC);
        $_POST['fun'] =( isset($row) && password_verify($this->password, $row['password']));
        if (isset($row) && password_verify($this->password, $row['password'])) {
            return $row['username'];
        } else {
            return NULL;
        }
    }
}