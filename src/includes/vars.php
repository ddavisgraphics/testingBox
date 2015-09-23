<?php
    $localvars = localvars::getInstance();
    $localvars->set('dbConnectionName', 'appDB');
    $localvars->set("baseDirectory","http://$_SERVER[HTTP_HOST]/test/");
    $localvars->set("siteTitle","TESTING");
?>