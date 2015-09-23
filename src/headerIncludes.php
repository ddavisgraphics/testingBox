<?php
    $patterns = templates::getTemplatePatterns();
    if (isset($patterns['formBuilder'])) {
        print '{form display="assets"}';
    }
?>

<link href="{local var="baseDirectory"}/includes/test.css" type="text/css" rel="stylesheet">