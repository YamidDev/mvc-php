<?php

    Class LinkPages {

        public function LinkPagesModel($linksModel) {
            if ($linksModel == "home"||
                $linksModel == "about"||
                $linksModel == "services"||
                $linksModel == "contact") {
                $module = "views/modules/".$linksModel.".php";
            }
            echo $module;
            return $module;
        }
    }