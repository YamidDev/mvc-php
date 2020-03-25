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
    }