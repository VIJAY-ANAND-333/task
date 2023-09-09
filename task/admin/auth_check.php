<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('location:admin_login.php');
}

?>