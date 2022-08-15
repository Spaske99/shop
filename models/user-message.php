<?php

include ('db.php');

class UserMessage extends DB { //nas korisnik, korisnik koga pravimo, registrujemp, extend db da bi moglo da se povezuje sa bazom

    public function setMessage($name, $email, $message) {
        if(!empty($name) && !empty($email) && !empty($message)) {
            $sql = "INSERT INTO message (username, email, message) VALUES (?, ?, ?);";
            $stmt = $this->connect()->prepare($sql); ///prepare kada su neki parametri ? pripremi to pa onda izvrsava
            $stmt->execute([$name, $email, $message]);//execute kad imamo prepare
            echo "Uspesno poslata poruka. <br><br>";
        } 
        else {
            die('Niste uneli sve podatke !');
        }
    }
}

?>