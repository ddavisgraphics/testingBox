
<?php
    require_once "engineHeader.php";

    // create a test form to use
    $localvars = localvars::getInstance();
    require_once 'FFmpegPHP2/FFmpegAutoloader.php';

?>

<h2> Testing Audio Import and Stuff </h2>

<form action="includes/handleFiles.php" method="post" enctype="multipart/form-data">
    {csrf}
    <input id="file-upload" type="file" name="fileUpload" />
    <label for="file-upload" id="file-drag">
        Select a file to upload
        <span id="file-upload-btn" class="button">Add a file</span>
    </label>

    <div><br><br>
        <input type="submit" name="submit" value="Submit" />
    </div>
</form>