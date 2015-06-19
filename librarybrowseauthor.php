<?php
require 'include/dbConnection.php';
?>
<html>
    
    <head>
        <title>Browse by Author</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylelib.css" type="text/css">
    </head>
    <body>
        <div id="container">
            <div id="inner">
                <?php 
                include 'include/libNavBar.php';
                ?>
                <div id="mainbody">
                    <h2>Browse by Author</h2>
                    <br><br>
                    
                    <?php 
                        foreach ($db->query('SELECT author FROM book') as $row){
                            echo '<div class="block"><h3><form action="author.php" method="get" id="author">'
                                    . '<input type="submit" form="author" value="' . $row['author'] . '">'
                                    . $row['author'] . '</form></h3></div>';
                        }
                    ?>
                    
                    <div class="block">
                        <h3><a href="">Browse by Title</a></h3>
                    </div>
                    <div class="block">
                        <h3><a href="">Browse by Author</a></h3>
                    </div>
                </div>
            </div>            
        </div>
    </body>
</html>
