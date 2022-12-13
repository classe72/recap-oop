<?php

require_once __DIR__ . '/Media.php';
require_once __DIR__ . '/../Traits/Streamable.php';

class Song extends Media
{
    use Streamable;

    public $duration;
    public $bitrate;

    public function __construct(Int $filesize, String $filesize_unit, String $title, String $author, Int $duration, String $bitrate)
    {
        parent::__construct($filesize, $filesize_unit, $title, $author);
        $this->duration = $duration;
        $this->bitrate = $bitrate;
    }

    public function get_full_duration()
    {
        return $this->duration . ' min'; // 120 min
    }

    public function get_details()
    {
        return "Title: {$this->title} - Filesize: {$this->get_full_filesize()} - Created by: {$this->author} - Duration: {$this->get_full_duration()} - Listen on: {$this->get_streaming_services_as_string()}";
    }
}
