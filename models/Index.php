<?php
include_once dirname(__DIR__).'/components/db_connect.php';
        
class IndexContent {    

    public static function getAlldb() {
                 
        $db = DB::getConnect();
       
              
        $result = $db->query('SELECT ID,Date,Categories,Articl_name,'
                .'SUBSTRING(Text, 1, 240),Img_little FROM'
                .' Aticls ORDER BY ID DESC LIMIT 5');
        $result->setFetchMode(PDO::FETCH_NUM);
          while($row = $result->fetch()){
        echo "<br>";
        echo $row[5];
        echo "<h2>".$row[3]."</h2>";
        echo "<br>";
        echo "<h3>".$row[1]." (".$row[2].")</h3>";
        echo "<br>";
        echo $row[4];
        echo "<br>";
        echo "<p><a href= $row[2]/$row[0]>далее...</a></p>";
        echo "<br>";
        
       }         
   
    
    }
}



    
    



