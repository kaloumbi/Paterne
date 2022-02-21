<?php

    session_start(); 
    extract($_POST);

    $color="green";
    $n =12;
    $_SESSION['i']= isset($_SESSION[i]? $_SESSION['i']+1 : 1;
    $i= $_SESSION['i'];
    if(isset($btn)){
        $_SESSION['n']=$corriger;
        if(empty($corriger)){
            color="red";
        }
    }else{
        $n=1;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "POST" >
        <textarea name="corriger" id="" cols="30" rows="10" style="border:2px solid <? $color ?> ></textarea>
        <input type= "submit" name="btn" id="" value= "ok" >
    </form>
</body>
</html>