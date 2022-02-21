<link rel="stylesheet" href="./multi.css">
<?php 
   session_start();
?>
<form action="controler.php" method="post">
    <label for="">Entrer a</label>
      <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['a'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php endif?>

      <input type="submit" name="btn_ok" id="" value="valider">


</form>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
