<?php
session_start();

if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $halaman = $_SESSION['user_login'];

    header('location:on-'. $halaman);
    
} else {
    header('location:login.php');
    exit();
    echo "test2";
    echo "test"
}