<?php 

echo " hlw";
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'db';

    function getConnection(){
        echo " hlw";
        global $db_host;
        global $db_name;
        global $db_user;
        global $db_pass;
        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if(!$con){
            echo " hollow";
            die("not connected". mysqli_connect_error());
        }
        else echo " connection was successful";
        echo " hlw";
    }

    echo " hlw";
    getConnection();
?>