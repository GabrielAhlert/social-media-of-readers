<?php
    
    $homepage = './src/home/homepage.php';
    $signin = './src/templates/signin.php';
    $signup = './src/templates/signup.php';
    $header = './src/templates/header.php';
    $footer = './src/templates/footer.php';
    
    session_start();
    include $header;
    if(isset($_GET['pag'])){
        $pag = $_GET['pag'];
        
        if($pag == 'signin'){
            include $signin;
        }elseif($pag == 'signup'){
            include $signup;
        }else{
            include $homepage;
        } 
    }else{
        include $homepage;
    }
    echo('');
    include $footer;

?>