<?php session_start();

$_SESSION['voted'] = 'voted';

$answer = $_POST["tmnt"] . "\n " . $_POST["vil"] . "\n " . $_POST["color"] . "\n " . $_POST["movie"] . "\n ";

$file = 'tmntsurvey.txt';
//open the file existing content
$current = file_get_contents($file);
//append new answer to file
$current .= $answer;
//write back to the file
file_put_contents($file, $current);

include 'results.php';
?>
