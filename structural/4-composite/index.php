<?php


require_once "Music.php";
require_once "Playlist.php";
require_once "Song.php";

$songOne = new Song("Zara Zara");
$songTwo = new Song("Hanuman Chalisa");
$songThree = new Song("Defend by Jordon Sandhu");

$playlistOne = new Playlist();
$playlistTwo = new Playlist();
$playlistThree = new Playlist();

$playlistOne->addSong($songOne);
$playlistOne->addSong($songTwo);
$playlistOne->addSong($songThree);

$playlistOne->removeSong($songThree);

$playlistOne->play();