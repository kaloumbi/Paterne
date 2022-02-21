<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./input.css">
</head>
<body>
<div class="f">
    <form action="controler.php" method="post">
        <div class="inp">
            <label for="" class="lab">Entrer un nombre</label>
            <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else echo '';  ?>"> 
            <?php if(isset($_SESSION['error']['a'])):?>
                    <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
            <?php endif?>
            
            <input type="submit" name="btn_ok" id="" value="valider">
        </div>
    </form>
</div> 

<?php  
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>

</body>
</html>