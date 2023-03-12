<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost:3306; dbname=library_managment", "root", "");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
