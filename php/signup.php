<?php 
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
    
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        //vérification de l'email de l'utilisateur
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//si l'email est valide
             
        }else{
            echo "$email - l'email saisi n'est pas valide!"; 
        }
    }else{
        echo "Veuillez renseigner les champs";
    }
?>