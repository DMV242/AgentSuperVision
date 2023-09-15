<?php

session_start();

if(empty($_SESSION)){
    header("location:../index.php");
    exit(0);
}

?>