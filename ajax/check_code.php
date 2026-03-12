<?php
session_start();
if(isset($_SESSION["code"]) == false) exit;
if(isset($_POST["code"]) == false) exit;

if($_SESSION["code"] == $_POST["code"]) {
    $_SESSION['user'] = $_SESSION['preuser'];

    unset($_SESSION['code']);
    unset($_SESSION['preuser']);
    echo "Код совпал";
} else {
    unset($_SESSION['code']);
    unset($_SESSION['preuser']);
}