<?php
session_start();

$_SESSION = [];

session_unset();
session_destroy();

echo "<script>
            alert('berhasil logout');
            window.location.href='login.php';
    </script>";
exit();