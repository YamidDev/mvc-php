<?php

    require_once 'connexion.php';

    Class Data extends Connexion {

        public static function login(array $data, $table){
            $stmt = Connexion::connect()->prepare(
                "SELECT username, password FROM $table WHERE username = :username 
                            AND password = :password"
            );

            $stmt->bindParam("username", $data['username'], PDO::PARAM_STR);
            $stmt->bindParam("password", $data['password'], PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }

        public function findAll(){
            $stmt = Connexion::connect()->prepare("SELECT * FROM users");
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function create($data, $table) {
            $stmt = Connexion::connect()->prepare(
                "INSERT INTO $table(username, password, email) 
                            VALUE(:username, :password, :email)"
            );

            $stmt->bindParam(":username", $data["username"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);

            if($stmt->execute()) {
                return "success";
            } else {
                return "error";
            }
        }
    }