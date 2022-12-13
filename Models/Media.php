<?php

class Media
{

    public $filesize;
    public $filesize_unit;
    public $title;
    public $author;

    public function __construct(Int $filesize, String $filesize_unit, String $title, String $author)
    {
        $this->filesize = $filesize;
        $this->filesize_unit = $filesize_unit;
        $this->title = $title;
        $this->author = $author;
    }

    public function get_full_filesize()
    {
        return $this->filesize . $this->filesize_unit;
    }

    public function get_details()
    {
        return "Title: {$this->title} - Made by: {$this->author} - Filesize: {$this->get_full_filesize()}";
    }
}
