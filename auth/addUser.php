<?php
    include '../src/db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($name) && !empty($password)){
        $pass = password_hash($password,PASSWORD_DEFAULT);
        $query = "INSERT INTO users(name,email,pass) VALUES (?,?,?)";
        $stmt = $db -> prepare($query);
        $stmt -> bind_param("sss",$name,$email,$pass);

        $result = $stmt ->execute();
        $stmt -> close();
        $db -> close(); 
        
        if($result)
            header('location:/?pag=signin&success=true');
        else
            header('location:/?pag=signup&error=true');
    }else
        header('location:/?pag=signup&empty=true');
    


?>