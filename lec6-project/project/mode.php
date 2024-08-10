<?php
require_once 'inc/functions.php';
if (isset($_COOKIE['mode']) && $_COOKIE['mode'] == "dark") {
    setcookie("mode", "light");
} else {
    setcookie("mode", "dark");
}
redirect("index.php");