<?php
    require_once '/home/www.libraries.wvu.edu/phpincludes/engine/engineAPI/latest/engine.php';
    $engine = EngineAPI::singleton();
    errorHandle::errorReporting(errorHandle::E_ALL);

    $localvars  = localvars::getInstance();
    $engineVars = enginevars::getInstance();

    //    /home/engineAPI/phpincludes/engine/template
    templates::load("rooms2015");

    recurseInsert("includes/vars.php","php");
    recurseInsert('includes/engineIncludes.php',"php");
    recurseInsert("acl.php","php");

?>