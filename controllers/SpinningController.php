<?php
include_once (realpath('models/Spinning.php'));
include_once (realpath('models/Spinning_1.php'));

class SpinningController {
    
   public function actionIndex() {

            include (realpath('views/spinning/Spinning.php'));
            echo __DIR__;
                      
    
  
  }
    public function actionView() {
        $a = explode('/',$_SERVER['REQUEST_URI']);//разбиваем URL на массив
        $id = $a[2];//получаем id статьи из массива полученного из URL
        echo $id;
        include (realpath('views/spinning/Spinning_1.php'));
        echo __DIR__;
        }

}
