<?php

require_once 'Song.php';
require_once 'Playlist.php';

$playlist1 = new Playlist();

$song1 = new Song('SongName1', 10);
$song2 = new Song('Yesterday', 20);

$playlist1->addSong($song1);
$playlist1->addSong($song2);


echo '<pre>';
var_dump($playlist1);
echo '</pre>';

echo '<br>';
//print_r($playlist1->songs . '<br>');
print_r($playlist1->getLength());
echo '<br><br>';

  foreach ( $playlist1->songs as $song ) {
    print $song->name . '<br>';

}
