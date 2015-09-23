<?php
    require_once '/home/www.libraries.wvu.edu/phpincludes/databaseConnectors/database.lib.wvu.edu.remote.php';

    $databaseOptions = array(
        'username' => 'username',
        'password' => 'password'
    );
    $databaseOptions['dbName'] = 'test';

    $db = db::create('mysql', $databaseOptions, 'appDB');
?>