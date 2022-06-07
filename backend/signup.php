<?php
    if (isset($_COOKIE['email'])) {
        unset($_COOKIE['email']);
    }

    echo "<script>window.location.href='../pages/signin/signin.php';</script>";
?>