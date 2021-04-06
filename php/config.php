<?php
    //création de la chaine de connection
    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    if($conn){
        echo "Connecté!" . mysqli_connect_error();
    }
?>