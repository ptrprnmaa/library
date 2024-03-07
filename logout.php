<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION ['index_admin.php']);
    session_destroy();

    header("location: index.php");
?>