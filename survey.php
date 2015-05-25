<?php

$answer = $_POST["tmnt"] . "\n";

$file = 'tmntsurvey.txt';
//open the file existing content
$current = file_get_contents($file);
//append new answer to file
$current .= $answer;
//write back to the file
file_put_contents($file, $current);

?>
<html>
    <head>
        <title>Thanks for voting!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>window.location = 'results.php'</script>
    </head>
    <body>
        <div id="container">
            <div id="inner">
        
        <?php include 'include/navbar.php'; ?>
                
        <div id="mainbody">
            <br>
            <div class="block">
              
            </div>
            <div class="block">
                
            </div>
        </div>
        </div>
        </div>
    </body>
</html>

