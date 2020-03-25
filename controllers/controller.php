<?php

    class MvcController {

        public function template() {
            include 'views/template.php';
        }

        public function linkPagesController() {
            $linksController = $_GET['action'];

            $response = LinkPages::LinkPagesModel($linksController);

            include $response;
        }
    }