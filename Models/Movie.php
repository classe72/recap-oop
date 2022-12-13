<?php

require_once __DIR__ . '/Media.php';
require_once __DIR__ . '/../Traits/Streamable.php';

class Movie extends Media
{

    use Streamable;

    public $duration;
    public $cast = [];

    public function __construct(Int $filesize, String $filesize_unit, String $title, String $author, Int $duration, array $cast)
    {
        parent::__construct($filesize, $filesize_unit, $title, $author);
        $this->duration = $duration;
        $this->set_cast($cast);
    }

    public function get_duration()
    {
        return $this->duration; // 120
    }

    public function get_full_duration()
    {
        return $this->duration . ' min'; // 120 min
    }

    public function get_full_cast_as_string()
    {
        return implode(', ', $this->cast);
    }

    public function set_cast(array $cast)
    {
        try {
            if (count($cast) < 1) {
                throw new Exception("Il cast deve contenere almeno un elemento!");
            }
            $this->cast = $cast;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function get_details()
    {
        return "Title: {$this->title} - Filesize: {$this->get_full_filesize()} - Directed by: {$this->author} - Duration: {$this->get_full_duration()} - Cast: {$this->get_full_cast_as_string()} - Watch on: {$this->get_streaming_services_as_string()}";
    }
}
