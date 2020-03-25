<?php

    Class LinkPages {

        public function LinkPagesModel($linksModel) {
            if ($linksModel == "about"||
                $linksModel == "services"||
                $linksModel == "contact") {
                $module = "views/modules/".$linksModel.".php";
            } else if($linksModel == 'home') {
                $module = "views/modules/home.php";
            } else {
                $module = "views/modules/home.php";
            }
            return $module;
        }
    }