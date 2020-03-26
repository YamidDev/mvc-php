<?php

    class Connexion {

        public function connect() {
            $link = new PDO("mysql:host=localhost;dbname=cursephp", "root", "");
            return $link;
        }
    }