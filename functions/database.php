<?php 

function connection(){
    // variables : you can change the names of the following if you want to, make sure the name makes sense. 
    $servername = 'localhost';
    $username = 'root';
    $password = ''; //for windows: no password but for mac: root
    $db_name = 'library_pm';

    $conn = new mysqli($servername,$username,$password,$db_name); // bridge from php ui to phpmyadmin[database]


    //validation: if the connection from php to database has no problem
    if($conn == TRUE){ // if it is true: we will return the connection statement
        return $conn;
    }else{  //if false: we will just return a boolean false
        return FALSE;
    }



}




?>