<?php

class FileUploader
{
    private $maxFileSize;
    private $validExtensions;
    private $file;
    private $ext;
    public $name;

    public function __construct($key, $maxFileSize, $validExtensions)
    {
        $this->file = $_FILES[$key];
        $this->maxFileSize = $maxFileSize;
        $this->validExtensions = $validExtensions;
    }

    public function uploadFile($dir)
    {
        $this->checkFile();
        $this->checkFileSize();
        $this->getExtension();
        $this->checkFileExtension();
        $this->createName();
        $this->moveFile($dir);
    }

    private function checkFile()
    {
        if ($this->file['error'] == UPLOAD_ERR_NO_FILE) {
            throw new Exception('not_file');
        }
    }

    private function createName()
    {
        $this->name = time() . '.' . $this->ext;
    }

    private function moveFile($dir)
    {
        $path = $dir . $this->name;
        move_uploaded_file($this->file['tmp_name'], $path);
    }

    private function getExtension()
    {
        $this->ext = pathinfo($this->file['name'], PATHINFO_EXTENSION);
    }

    private function checkFileSize()
    {
        if ($this->file['size'] > $this->maxFileSize) {
            throw new Exception('file_size');
        }
    }

    private function checkFileExtension()
    {
        if (!in_array($this->ext, $this->validExtensions)) {
            throw new Exception('file_type');
        }
    }
}