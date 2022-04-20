<?php
        session_start();
        session_destroy();
        include 'config.php';
       if( isset($_POST['submit_logout'])){
            echo "<script language='javascript'>location.href='index.php';";
            echo "</script>";
       }
       

?>