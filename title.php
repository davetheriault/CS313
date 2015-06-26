<?php
require 'include/dbConnection.php';
?>
<html>
    <head>
        <title><?php echo $_GET['title']; ?></title>
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
                    <h2>Books by <?php echo $_GET['auth']; ?></h2>
                    <br><br>
                    
                    <?php 
                        foreach ($db->query('SELECT title, author FROM book') as $row){
                            if ($row['author'] == $_GET['auth']){
                            echo '<div class="block"><form action="book.php" method="get" id="' . str_replace(' ', '', $row['title']) . '">'
                                    . '<input name="book" class="submitbutton" type="submit" form="' . str_replace(' ', '', $row['title']) . '" value="' . $row['title'] . '">'
                                    . '</form></div>';
                        }
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

