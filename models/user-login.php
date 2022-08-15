<?php

include ('db.php');

class Users extends DB { //nas korisnik, korisnik koga pravimo, registrujemp, extend db da bi moglo da se povezuje sa bazom

    public function setUsers($name, $email, $password) {
        if(!empty($name) && !empty($email) && !empty($password)) {
            $sql1 = "SELECT * FROM profile WHERE email=?";
            $st = $this->connect()->prepare($sql1);
            $st->execute([$email]);
        } 
        else {
            die('Niste uneli sve podatke !');
        }

        if($st->rowCount() == 0) {
            $sql = "INSERT INTO profile (username, email, password) VALUES (?, ?, ?);";
            $stmt = $this->connect()->prepare($sql); 
            $stmt->execute([$name, $email, $password]);
            echo "Uspesna registracija. <br><br>";
        }
        else {
            echo "Korisnik sa navedenim email-om vec postoji !<br><br>"; 
        } 
    }

    public function Login ($email, $password) {
        if(!empty($email) && !empty($password)) {
            $sql1 = "SELECT * FROM profile WHERE email=? and password=?";
            $st = $this->connect()->prepare($sql1);
            $st->execute([$email, $password]);
        }
        else {
            die('Niste uneli sve podatke !');
        }

        if ($st->rowCount() == 1) {
            echo "You are logged in successfully";
        } else {
            echo "You need to register an account";
        }
    }
}

?>