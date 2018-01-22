<?php
    try{
    $m = new MongoClient('localhost');
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->testdb;
    //echo "Databse loginreg selected";
    $collection = $db->user; 
    //echo "Collection  Selected Successfully";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
       /*session_start();*/
?>