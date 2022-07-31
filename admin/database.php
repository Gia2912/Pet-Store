<?php
include "config.php";
?>



<?php
Class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
        $this->connectDB();
    }

    private function connectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if($this->link){
            $this->error ="Connection fail".$this->link->connect_error;
            return false;
        }
    }

    //select or read data
    public function select($query){
        $result = $this->link->query($query) or
          die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    }

    //insert data
    public function insert($query){
        $insert_row = $this->link->query($query) or
          die($this->link->error.__LINE__);
        if($insert_row){
            return $insert_row;
        }else {
            return false;
        }
    }
    //update data
    public function update($query){
        $update_row = $this->link->query($query) or
         die($this->link->error.__LINE__);
        if($update_row){
            return $update_row;
        }else{
            return false;
        }
    }
    //delete data
    public function delete($query){
        $delele_row = $this->link->query($query) or
         die($this->link->error.__LINE__);
        if($delele_row){
            return $delele_row;
        }else{
            return false;
        }
    }
}
?>