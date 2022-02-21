<?php

    include_once('fonctions.php');
    session_start();
    if(isset($_POST['btn_ok'])){
        $a=$_POST['a'];
        $_SESSION['post'] = $_POST;
        $arrError=[];
        validNombre($a, "a", $arrError);

        if(count($arrError)==0){
            listnumber($a);
        }else{
            $_SESSION['error']=$arrError;
            //var_dump( $_SESSION);
            header('location:index.php');
            exit();
        }
    }else{
        //Redirection
        header('location:index.php');
        exit();
    }