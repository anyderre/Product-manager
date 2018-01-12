<?php 
    $connect =mysqli_connect('localhost', 'root', 'toor','product_manager' );
    if(!$connect){
        die("Not connected to the database: "); 
        exit();
    }
            
    if(mysqli_connect_errno($connect)){
        echo 'language="javascript">';
            echo 'alert("Failed to connect")';
            echo '</script>';
    }
?>