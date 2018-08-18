<?php
session_start();

function check_session(){


    if(isset($_SESSION['id'])) {
        //header("Location: welcome.php");
        return true;
    }
    return false;

}