<?php

require_once __DIR__ . '/Models/Media.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Song.php';

$media = new Media(2, 'MB', 'Foto al lago', 'Donato');
$fotoInMontagna = new Media(3, 'MB', 'Foto in montagna', 'Fabrizio');

$movie = new Movie(2, 'GB', 'Jurassic Park', 'Steven Spielberg', 120, ['Laura Dern', 'Jeff Goldblum', 'Sam Neill']);
$movie->set_streaming_services('Netflix');

$song = new Song(10, 'MB', "I'm Good (Blue)", 'David Guetta', 3, '128 kbps');
$song->set_streaming_services('Spotify');
$song->set_streaming_services('Deezer');

echo '<h2>Lista file multimediali</h2>';

echo $media->get_details() . '<br />';
echo $fotoInMontagna->get_details() . '<br />';
echo $movie->get_details() . '<br />';
echo $song->get_details();

// var_dump($media);
// var_dump($movie);

// echo $movie->get_streaming_services_as_string();
