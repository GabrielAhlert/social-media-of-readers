<?php
    include '../src/db.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users Where email = ?";
    $stmt = $db->prepare($query);
    $stmt -> bind_param("s",$email);
    $stmt -> execute() ;

    $resp = $stmt -> get_result();

    if($resp -> num_rows == 1){
        $user = $resp -> fetch_assoc();
        if( password_verify($password,$user['pass']) == $user['pass'] ){
            session_start();
            $_SESSION['logged'] = true;
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            header('location:/');
        }else
        header('location:/?pag=signin&error=true');
    }else 
        header('location:/?pag=signin&error=true');
    
?>