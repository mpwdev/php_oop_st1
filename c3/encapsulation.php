<?php

require_once 'Playlist.php';
require_once 'Song.php';
require_once 'Counter.php';
require_once 'Connection.php';
require_once 'Http.php';
require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'SongHolder.php';
require_once 'Album.php';

$song1 = new Song('yesterday', 100);
$album1 = new Album();
$album1->addSong($song1);


echo '<pre>';
var_dump($album1->getSongs());

echo '</pre>';

echo '<br>';

echo '<pre>';
print_r($album1->getClassName() . '<br>');
echo '</pre>';
