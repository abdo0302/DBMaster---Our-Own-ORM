<?php
require_once('ORMInterface.php');
require_once('Database.php');
require_once('../config/Config.php');
class ORM implements ORMInterface {
    protected static $table;



    public function save(){
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $properties =get_object_vars($this);
        $columns =implode(", ",array_keys($properties));
        $valuesArray = array();
        foreach ($properties as $value) {
            $valuesArray[] = "'" . addslashes($value) . "'";
        }
        $values = implode(", ", $valuesArray);

        $sql="SELECT * FROM information_schema.tables WHERE table_schema = 'DBMasterr' AND table_name =  '" . static::$table . "' ";
            $result = $db->query($sql);
            if($result->rowCount() == 0){
                $sql="CREATE TABLE " . static::$table . "(id INT AUTO_INCREMENT PRIMARY KEY)";
                if($db->query($sql)){
                    echo 'Table créée avec succès'."\n";
                }
            }


        foreach($properties as $c=>$d){
            $type = gettype($d);
            $t = '';
            if ($type == 'integer') {
                $t = "INT(10)";
            } elseif ($type == 'double') {
                $t = "DOUBLE";
            } elseif ($type == 'string') {
                $t = "VARCHAR(255)";
            } elseif ($type == 'boolean') {
                $t = "TINYINT(1)";
            } else {
                $t = "TEXT";
            }

              $sql = "SELECT COLUMN_NAME 
              FROM INFORMATION_SCHEMA.COLUMNS 
              WHERE TABLE_SCHEMA = '".DB_NAME."' 
              AND TABLE_NAME = '" . static::$table . "' 
              AND COLUMN_NAME = '$c'";
              $result = $db->query($sql);
                if ($result->rowCount() == 0){
                    $sql="ALTER TABLE `" . static::$table . "` ADD `$c` $t";
                    $db->query($sql);
                }
        }

          
        $sql="INSERT INTO " . static::$table . "($columns) VALUES ($values) ";
        if($db->query($sql)){
            echo 'Ajouté avec succès';
        }

 }

    public function update($id){
        $properties =get_object_vars($this);
        $t=[];
        foreach($properties as $key=>$value){
            $t[$key]=$value;
          
            }
        foreach($t as $a=>$b){
             $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
            $sql="UPDATE " . static::$table . " SET $a='".$b."' WHERE id=".$id."";
            if($db->query($sql)){
                echo 'update avec succès ';
                echo '<br>';
            }    
        }  

           
        
    }

    public function find($id){
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $sql = "SELECT * FROM " . static::$table . " WHERE id = ".$id."";  
        $stmt =$db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findAll(){
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $sql = "SELECT * FROM " . static::$table . "";  
        $stmt =$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id){
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $sql = "DELETE FROM " . static::$table . " WHERE id = ".$id."";
        if($db->query($sql)){
            echo 'supprimer avec succès';
        }
    }


            
}  
?>