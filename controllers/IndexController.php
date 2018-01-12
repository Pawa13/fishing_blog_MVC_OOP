<?php
class IndexController {

    public static function actionInd() {
        include 'models/Index.php';
        include_once (realpath('views/index/Index.php'));
              
    }

}


