<?php
?>
<html>
    <head>
        <title>CS313 Survey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div id="container">
            <div id="inner">
        
        <?php include 'include/navbar.php'; ?>
                
        <div id="mainbody">
            <br>
            <div class="block">
                <h2>Who is your favorite Teenage Mutant Ninja Turtle?</h2><br>
                <form action="survey.php" method="post" id="turtle">
                    <input type="radio" name="tmnt" value="1">Leonardo<br>
                    <input type="radio" name="tmnt" value="2">Donatello<br>
                    <input type="radio" name="tmnt" value="3">Raphael<br>
                    <input type="radio" name="tmnt" value="4">Michaelangelo<br>
                    <br>
                    <input type="submit" form="turtle"><br>
            </div>
            <div class="block">
                <h2>View Results</h2><br>
            <a href="assignments.php">Results Page</a>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
