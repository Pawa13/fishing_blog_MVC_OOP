<?php
include_once dirname(__DIR__).'/components/db_connect.php';
        
class SpinningArticl {    

    public static function OneArticl($id) {
        
                 
        $db = DB::getConnect();
                 
        $id = intval($id);
              
        $result = $db->query('SELECT ID,Date,Categories,Articl_name,'
                .'Text,Img_big FROM'
                .' aticls WHERE ID='.$id);
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
        echo "<br>";
       }         
    }
}




    
    



