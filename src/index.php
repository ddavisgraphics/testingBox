
<?php
    require_once "engineHeader.php";

    // create a test form to use
    $localvars = localvars::getInstance();
    $localvars->set('self', $_SERVER['PHP_SELF']);
    $root = $_SERVER['DOCUMENT_ROOT'];

    // include ffmpeg
    recurseInsert('/includes/libClasses/ffmpeg.php', 'php');
    recurseInsert('/includes/handleFiles.php', 'php');

    // create directories for
    $uploadsPath   = $root."/uploads";
    $originalFiles = $uploadsPath."/originals";
    $editedFiles   = $uploadsPath."/edits";

    // Throw Exception for logs
    if(!file_exists($uploadsPath)){
        throw new Exception('Please get the sys admin to create an uploads folder at - '.$uploadsPath);
    }

    // make the directory if it doesn't exsist
    if(file_exists($uploadsPath) && !file_exists($originalFiles)){
        shell_exec("mkdir -m 775 ".$originalFiles);
        shell_exec("mkdir -m 775 ".$originalFiles."/video");
        shell_exec("mkdir -m 775 ".$originalFiles."/audio");
        shell_exec("mkdir -m 775 ".$editedFiles);
        shell_exec("mkdir -m 775 ".$editedFiles."/video");
        shell_exec("mkdir -m 775 ".$editedFiles."/audio");
    }

    // Handle the files
    if(isset($_FILES['fileUpload']) && !$_FILES['fileUpload']['error']){
        $file         = $_FILES['fileUpload'];
        $validFile    = new validateUpload($file);

        // @TODO
        // This works for testing but development we may want a way to check for
        // duplicate files.  Depending upon how it currently works.
        if($validFile->isValid()){
            // move to directory
            $tmp_name     = explode("/", $file['tmp_name']);
            $newFileName  = $file['name'];
            $path         = $originalFiles.DIRECTORY_SEPARATOR.$validFile->fileType.DIRECTORY_SEPARATOR;
            $tmpDirectory = $path.$tmp_name[2].DIRECTORY_SEPARATOR;

            if(!file_exists($tmpDirectory)){
                shell_exec("mkdir -m 775 ".$tmpDirectory);
            }

            $uploadFile  = $tmpDirectory.basename($_FILES['fileUpload']['name']);

            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadFile)){
                $localvars->set('feedback', '<div class="success"> It worked submitted perfectly. </div>');
            } else {
                $localvars->set('feedback', '<div class="error"> File failed to upload </div>');
            }

            // Test The Class and FFMPEG
            $ffmpeg = new FFMPEG($uploadFile);
            $metadata = $ffmpeg->getMetadata();

            print "<pre>";
            var_dump($ffmpeg);
            print "</pre>";


            print "<pre>";
            var_dump($metadata);
            print "</pre>";



             // For database as backup
            // $fileContents = file_get_contents($_FILES['fileUpload']['tmp_name']);
            // $db        = db::get($localvars->get('dbConnectionName'));
            // $sql       = "INSERT INTO filesTest(fileName, type, size, data, path) VALUES(?,?,?,?,?)";
            // $sqlArray  = array(
            //     $newFileName,
            //     $file['type'],
            //     $file['size'],
            //     $fileContents,
            //     $uploadFile
            // );
            // $sqlResult = $db->query($sql, $sqlArray);
            // if($sqlResult->error()){
            //     throw new Exception('error Inserting the stuff into db');
            // } else {
            //     $localvars->set('feedback', '<div class="success"> File Saved to database.</div>');
            // }


        }
    }
?>

<h2> Testing Audio Import and Stuff </h2>

{local var="feedback"}

<form action="{local var="self"}" method="post" enctype="multipart/form-data">
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