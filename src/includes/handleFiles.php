<?php
   Class validateUpload {
        // get the posted file
        public $file        = array();
        protected $fileInfo = array();

        // validation stuff
        protected $maximumFileSize;
        protected $allowedFileTypes;
        protected $validFile;
        public $fileType;
        public $mimeType;

        // get the basic info
        public function __construct($file, $mimeTypes = NULL, $maxFileSize = NULL){
            $this->file = $file;

            $defaultMimeTypeArray = array(
                // audio
                'audio/x-aiff',
                'audio/basic',
                'audio/x-mpegurl',
                'audio/mid',
                'audio/mpeg',
                'audio/x-pn-realaudio',
                'audio/aiff',
                // video
                'video/x-ms-asf',
                'video/x-msvideo',
                'video/x-la-asf',
                'video/mpeg',
                'video/quicktime',
                'video/x-flv',
                'video/mp4',
                'video/MP2T',
                'video/3gpp',
                'video/x-ms-wmv'
            );

            // Set the Mime Types
            if(isnull($mimeTypes)){
                $this->allowedFileTypes = $defaultMimeTypeArray;
            } else {
                $this->setFileTypes($mimeTypes);
            }

            // Set the Max File Size
            if(isnull($maxFileSize)){
                $this->maximumFileSize = 2; // set to 2mb
            } else {
                $this->maxFileSize($maxFileSize);
            }
        }

        // allow the file size to be set outside of the class
        public function maxFileSize($size){
            $this->maximumFileSize = $size;
        }

        // allow user to set the allowed file types
        public function setFileTypes($fileTypes){
            $this->allowedFileTypes = $fileTypes;
        }

        // return true or false for valid file
        public function isValid(){
            if($this->validateMIME() && $this->validateSize() && $this->validFileName()){
                $this->validFile = TRUE;
                return TRUE;
            }
            else {
                $this->validFile = FALSE;
                return FALSE;
            }
        }

        private function validFileName(){
            if($this->checkUploadName() && $this->checkFileNameLength()){
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        // grabbed concept from php documentation
        // checks to make sure file doesn't have hidden junk in name
        private function checkUploadName(){
            $filename  = $this->file['name'];
            $validName = (preg_match('`^[-0-9A-Z_\.]+$`i', $filename) ? TRUE : FALSE);
            return $validName;
        }

        private function checkFileNameLength(){
            $filename  = $this->file['name'];
            $validNameLength = (strlen($filename) < 200 ? TRUE : FALSE);
            return $validNameLength;
        }

        // valid mime types
        private function validateMIME(){
            $fileType = $this->file['type'];
            $fileDetect = explode("/" , $fileType);
            if(in_array($fileType, $this->allowedFileTypes)){
                $this->mimeType = $fileType;
                $this->fileType = $fileDetect[0];
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        // valid size
        private function validateSize(){
            $this->fileSize = $this->bytesToMb($this->file['size']);

            if($this->fileSize <= $this->maximumFileSize  && $this->fileSize > 0){
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
?>