<?php
require 'include/dbConnection.php';
?>
<html>
    
    <head>
        <title>Browse by Title</title>
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
                    <h2>Browse by Book Title</h2>
                    <br><br>
                    <div class="block">
                        <form id="searchTitle" action="title.php" method="get">
                            <input type="search" name="title" form="searchTitle">
                        </form>
                    </div> 
                    <?php /*
                        foreach ($db->query('SELECT DISTINCT title FROM book') as $row){
                            echo '<div class="block"><form action="title.php" method="get" id="' . str_replace(' ', '', $row['title']) . '">'
                                    . '<input name="title" class="submitbutton" type="submit" form="' . str_replace(' ', '', $row['title']) . '" value="' . $row['title'] . '">'
                                    . '</form></div>';
                        }
                   */?>
           
                    <?php
                        include 'include/browseLib.php';
                    ?>
                </div>
            </div>            
        </div>
    </body>
</html>

