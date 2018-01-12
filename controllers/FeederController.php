<?php

include_once (realpath('models/Feeder_1.php'));
include_once (realpath('models/Feeder.php'));



class FeederController {
    
   public function actionIndex() {

            //include dirname(__DIR__).'/views/feeder/Feeder.php';
            include (realpath('views/feeder/Feeder.php'));       
    
  
  }
    public function actionView() {
        $a = explode('/',$_SERVER['REQUEST_URI']);//разбиваем URL на массив
        $id = $a[2];//получаем id статьи из массива полученного из URL
        //include dirname(__DIR__).'/views/feeder/Feeder_1.php';
        include (realpath('views/feeder/Feeder_1.php'));  
        
        }

}
