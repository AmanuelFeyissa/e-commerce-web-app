<?php
// output buffering is like a container that is able to send php requests altogether
ob_start();

// sesstion is like a security feature when we wish to login and stuff
session_start();

// DS means back slash or forword slash depending on which ever OS you're using
/* the next statment means if DS is already defined set it to null 
   else define it as DIRECTORY_SEPARATOR */
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

/* the next statment means if TEMPLATE_FRONT is already defined set it to null 
   else define it as template/front 
   AND THE SAME GOES TO THE OTHER STATMENTS */
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "template/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "template/back");


defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");


defined("DB_PASSWORD") ? null : define("DB_PASSWORD", "");

defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

// creating a connection with MYSQL db by passing the above variables as its argument
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// now functions.php must be included in every file we create
require_once("functions.php");




?>