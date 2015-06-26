<?php
?>
<html>
    <head>
        <title>Mount Bruno Elementary Library</title>
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
                    <h2>Browse Books</h2>
                    <br><br>
                    <?php require 'include/browseLib.php';?>
                </div>
            </div>            
        </div>
    </body>
</html>

