<?php

class User {
    
    private $db; // PDO connection
    private $username, $password; // Credentials offered
    private $type;
    
    function __construct($db, $username, $password) {
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
    }
    
    // Attempt to add this user and return whether it worked
    function register($type) {
        $this->type = $type;
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        $insert = $this->db->prepare('insert into users(username,type,password) values(:username,:type,:password)');
        $insert->bindParam(':username', $this->username, PDO::PARAM_STR);
        $insert->bindParam(':type', $type, PDO::PARAM_STR);
        $insert->bindParam(':password', $hash, PDO::PARAM_STR);
        return $insert->execute();
    }
    
    // Attempt to add this user and return whether it worked
    function registerAdditional($first, $last, $age) {
        if($this->type == 'renter') {
            $insert = $this->db->prepare('insert into renter(firstName,lastName,rating,age,renter_username) values(:first,:last,0,:age,:username)');
            $insert->bindParam(':first', $first, PDO::PARAM_STR);
            $insert->bindParam(':last', $last, PDO::PARAM_STR);
            $insert->bindParam(':age', $age, PDO::PARAM_INT);
            $insert->bindParam(':username', $this->username, PDO::PARAM_STR);
            return $insert->execute();
        }
        elseif($this->type == 'owner') {
            $insert = $this->db->prepare('insert into owner(firstName,lastName,rating,age,owner_username) values(:first,:last,0,:age,:username)');
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
        if (isset($row) && password_verify($this->password, $row['password'])) {
            return array($row['username'],$row['type']);
        } else {
            return NULL;
        }
    }
    
    function getProfileInfo($type) {
        if($type=='renter'){
        $select = $this->db->prepare('select * from renter a join users b on a.renter_username=b.username where renter_username=:username;');
        $select->bindParam(':username', $this->username, PDO::PARAM_STR);
        $select->execute();
        }
        else{
        $select = $this->db->prepare('select * from owner a join users b on a.owner_username=b.username where owner_username=:username');
        $select->bindParam(':username', $this->username, PDO::PARAM_STR);
        $select->execute();
        }
        $row = $select->fetch(PDO::FETCH_ASSOC);
        
        return array($row['firstName'],$row['lastName'],$row['age']);
        
    }
}