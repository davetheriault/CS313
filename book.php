<?php
require 'include/dbConnection.php';
?>
<html>
    <head>
        <title><?php echo $_GET['book']; ?></title>
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
                    <h2><?php echo $_GET['book']; ?></h2>
                    <br><br>

                    <?php 
                        foreach ($db->query('SELECT title, author, status, genre FROM book') as $row){
                            if ($row['title'] == $_GET['book']){
                                echo '<div class="block"><h3>Title:</h3><br><br><div style="color: white">' . $row['title'] . '</div></div>';
                                echo '<div class="block"><h3>Author:</h3><br><br><div style="color: white">' . $row['author'] . '</div></div>';
                                echo '<div class="block"><h3>Genre:</h3><br><br><div style="color: white">' . $row['genre'] . '</div></div>';
                                if ($row['status'] == 'Available') {
                                    echo '<div class="block"><h3>Status:</h3><br><form id="reserv" method="post" action="cart.php">'
                                            . '<div style="color: white">' . $row['status'] . '</div>'
                                            . '<button type="submit" form="reserv" value="Reserve">Reserve</button></form></div>';
                                } else {
                                    echo '<div class="block"><h3>Status:</h3><br><br><div style="color: white">' . $row['status'] . '</div></div>';
                                }
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

