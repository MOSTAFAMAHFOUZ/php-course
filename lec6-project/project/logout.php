<?php 
session_start();
require_once('inc/functions.php');

session_destroy();

redirect("index.php");


// 