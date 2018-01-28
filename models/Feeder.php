<?php
include_once dirname(__DIR__).'/components/db_connect.php';
        
class FeederContent {    

    public static function getAlldb() {
                 
        $db = DB::getConnect();
        
        $articlsList = array();
       
              
        $result = $db->query('SELECT ID,Date,Categories,Articl_name,'
                .'SUBSTRING(Text, 1, 400),Img_little FROM'
                .' aticls WHERE Categories = "feeder" ORDER BY ID DESC LIMIT 5');
        $result->setFetchMode(PDO::FETCH_NUM);
          while($row = $result->fetch()){
            echo "<br>";
        echo "<h2>".$row[3]."</h2>";
        echo "<br>";
        echo "<h3>".$row[1]." (".$row[2].")</h3>";
        echo "<br>";
        echo $row[5];
        echo $row[4];
        echo "<br>";
        echo "<p><a href= $row[2]/$row[0]>Читать далее...</a></p>";
        echo "<br>";
       }         
    }
}



    
    



