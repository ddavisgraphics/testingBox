<?php
    // Create a class for dealing with files of any type
    require_once "../engineHeader.php";
    // database info
    $db        = db::get($localvars->get('dbConnectionName'));

    Class ManageFileUploads{
        // save directory
        protected $directory;
        protected $permissions = 0777;
        protected $rootDir     = "/home/www.libraries.wvu.edu/uploads";

        // get the posted file
        public $file        = array();
        protected $fileInfo = array();
        protected $fileBinary;

        // validation stuff
        protected $maximumFileSize;
        protected $allowedFileTypes;
        protected $validFile;


        // tell where we want the file to save
        // get the basic info
        public function __construct($file){
            $this->file = $file;
            $this->fileInfo = new finfo();
        }

        // allow the file size to be set outside of the class
        public function maxFileSize($size){
            $this->maximumFileSize = $size;
        }

        // allow user to set the allowed file types
        public function setFileTypes($fileTypes){
            $this->allowedFileTypes = $fileTypes;
        }

        public function setBlob($blob){
            $this->fileBinary = $blob;
        }

        public function saveFileToDirectory(){
        }

        // save the un-edited file for backup
        // just add some basic information
        public function saveOriginalToDB($database, $table){

        }

        // return true or false for valid file
        public function isValid(){
            if($this->validateMIME() && $this->validateSize()){
                $this->validFile = TRUE;
            }
            else {
                $this->validFile = FALSE;
            }
        }

        // valid mime types
        private function validateMIME(){
            if(in_array($this->file['type'], $this->allowedFileTypes)){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        // valid size
        private function validateSize(){

            $this->fileSize = $this->bytesToMb($this->file['size']);

            if($this->fileSize <= $this->maximumFileSize){
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        // helper function from stackoverflow
        private function bytesToMb($bytes){
            return round(($bytes / 1048576), 2);
        }

    }

    $allowedMIME = array(
        'video/x-flv',
        'video/mp4',
        'application/x-mpegURL',
        'video/MP2T',
        'video/3gpp',
        'video/quicktime',
        'video/x-msvideo',
        'video/x-ms-wmv'
    );

    $file = $_FILES['fileUpload'];
    $fileData = file_get_contents($_FILES['fileUpload']['tmp_name']);

    $fileManager = new ManageFileUploads($file);
    $fileManager->maxFileSize(2);
    $fileManager->setFileTypes($allowedMIME);
    $fileManager->isValid();
    $fileManager->setBlob(file_get_contents($_FILES['fileUpload']['tmp_name']));


    print "Everything above me is working!";


?>