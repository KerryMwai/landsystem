<?php
session_start();
if(isset($_SESSION['permission'])){
    session_unset();
    session_destroy();
    header("location:../index.php");
}

