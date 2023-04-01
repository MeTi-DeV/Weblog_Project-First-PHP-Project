<?php
require_once('../functions/helpers.php');
session_start();
if (!isset($_SESSION['user'])) {
    redirect('auth/login.php');
}
?>