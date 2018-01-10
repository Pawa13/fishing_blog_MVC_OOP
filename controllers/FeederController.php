<?php
    
    include_once dirname(__DIR__).'/views/shablon_feeder.php';
class FeederController {
    
    public function actionIndex() {
        
        
  
    }
    public function actionView($params) {
        
        $id = $params[0];
        echo $id;
    }

}
