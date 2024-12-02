<?php
session_start();
session_destroy();
header('../auth/login.php');
?>