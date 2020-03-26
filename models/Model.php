<?php

    Class LinkPages {

        public function LinkPagesModel($linksModel) {
            if ($linksModel == "about"||
                $linksModel == "services"||
                $linksModel == "contact" ||
                $linksModel == "login" ||
                $linksModel == "register" ||
                $linksModel == "users" ||
                $linksModel == "exit"
            ) {
                $module = "views/modules/".$linksModel.".php";
            } else if($linksModel == 'home') {
                $module = "views/modules/home.php";
            }else if($linksModel == 'ok'){
                $module = "views/modules/register.php";
            } else if($linksModel == 'error'){
                $module = "views/modules/login.php";
            } else {
                $module = "views/modules/home.php";
            }
            return $module;
        }
    }