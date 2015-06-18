<?php
require 'include/dbConnection.php';

?>
<html>
    <head>
        <title>Scripture Resources</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div id="container">
            <div id="inner">
        
                        <?php include 'include/navbar.php'; ?>

        <div id="mainbody">
            
            <?php 
            foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row){
                echo '<div class="block"><strong>'. $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong> - \"'
                        . $row['content'] . '\"</div>';
            }
            ?>
            <div class="block">
                <h2><a href="readiness.php">Team Readiness Activity</a></h2>
            </div>
            <div class="block">
                <a href="endsession.php">******</a>
            </div>
            
        </div>
        </div>
        </div>
    </body>
</html>
