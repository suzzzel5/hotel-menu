<?php
session_start();
session_unset();
sesssion_destory();

header("location:loginForm.php");
?>