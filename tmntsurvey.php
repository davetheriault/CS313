<?php

if (!isset($_SESSION['voted'])) {
    include 'phpsurvey.php';
} else {
    include 'results.php';
}

?>