<?php
session_start();
if ($_SESSION['user'] == null) {
    header("location: ../adlogin/notAuthorised.php");
}
