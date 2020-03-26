<?php

    class MvcController {

        public function template() {
            include 'views/template.php';
        }

        public function linkPagesController() {

            if (isset($_GET['action'])){
                $linksController = $_GET['action'];
            }else {
                $linksController = 'home.php';
            }

            $response = LinkPages::LinkPagesModel($linksController);
            include $response;
        }

        public function createUser() {
            if (isset($_POST["usernameNew"])){

                $data = array(
                    "username"=> $_POST['usernameNew'],
                    "password"=> $_POST['passwordNew'],
                    "email" => $_POST['emailNew']
                );

                $response = Data::create($data, "users");

                if ($response=="success"){
                    header("location:index.php?action=ok");
                } else {
                    header("location:index.php?action=register");
                }
            }
        }

        public function login(){
            if(isset($_POST['username'])){
              $data =   array(
                  "username"=> $_POST['username'],
                  "password"=> $_POST['password']
              );

              $response= Data::login($data, "users");

              if ($response['username'] == $_POST['username'] && $response['password']==$_POST['password']){
                  header("location:index.php?action=users");
              } else {
                  header("location:index.php?action=error");
              }
            }
        }

        public function findAll() {
            $response = Data::findAll();

            foreach ($response as $row => $item){
                echo '<tr>
                        <td>'.$item["id"].'</td>
                        <td>'.$item["username"].'</td>
                        <td>'.$item["password"].'</td>
                        <td>'.$item["email"].'</td>
                        <td><button class="btn btn-warning">Edit</button></td>
                        <td><button class="btn btn-danger">delete</button></td>
                      </tr>'
                ;
            }
        }
    }