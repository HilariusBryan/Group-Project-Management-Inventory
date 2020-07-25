<?php 
    session_start();
    if (isset($_SESSION['loggedin'])) {
        //echo "<script>alert('Session Jalan');</script>";
        if ($_SESSION['loggedin'] != true) {
            header("Location: barang.php");
        }
    } else {
        header("Location: ../index.php");
    }
?>