<?php

    include_once('fonctions.php');
    session_start();
    if(isset($_POST['btn_ok'])){
        $a=$_POST['a'];
        $_SESSION['post'] = $_POST;
        $arrError=[];
        validNombre($a, "a", $arrError);

        if(count($arrError)==0){
            input($a);
        }else{
            $_SESSION['error']=$arrError;
            header('location:index.php');
            exit();
        }
    }else{
        
        header('location:index.php');
        exit();
    }