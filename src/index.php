
<?php
    require_once "engineHeader.php";
    //include "includes/templateHeader.php";

    // create a test form to use
    $localvars = localvars::getInstance();
    formBuilder::ajaxHandler();

    require_once 'FFmpegPHP2/FFmpegAutoloader.php';

?>

<h2> Testing Audio Import and Stuff </h2>
