 <?php
    include("fonctions.php");
    session_start();

    if(isset($_POST['val'])){
        $_POST['jr'];
        $_POST['ms'];
        $_POST['an'];

        $_SESSION['post'] = $_POST;
        $error= [];

    }

