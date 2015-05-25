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
            <form action="survey.php" method="post" id="turtle">
                <div class="block">
                    <h2>Who is your favorite Teenage Mutant Ninja Turtle?</h2><br><br>
                
                    <input type="radio" name="tmnt" value="1">Leonardo<br>
                    <input type="radio" name="tmnt" value="2">Donatello<br>
                    <input type="radio" name="tmnt" value="3">Raphael<br>
                    <input type="radio" name="tmnt" value="4">Michaelangelo<br>
                    <br>                   
                </div>
                <div class="block">
                    <h2>Out of these colors, which is your favorite?</h2><br><br>
                    
                    <input type="radio" name="color" value="b">Blue<br>
                    <input type="radio" name="color" value="p">Purple<br>
                    <input type="radio" name="color" value="r">Red<br>
                    <input type="radio" name="color" value="o">Orange<br>
                    <br>                    
                </div>
                <div class="block">
                    <h2>Who is the coolest ninja turtle villain?</h2>
                    <br><br>
                    <input type="radio" name="vil" value="s">Shredder<br>
                    <input type="radio" name="vil" value="k">Krang<br>
                    <input type="radio" name="vil" value="y">Rocksteady<br>
                    <input type="radio" name="vil" value="e">Beebop<br>
                </div>
                <div class="block">
                    <h2>What is the best Teenage Mutant Ninja Turtle movie?</h2>
                    <br><br>
                    <input type="radio" name="movie" value="5">Teenage Mutant Ninja Turtles (1990)<br>
                    <input type="radio" name="movie" value="6">Teenage Mutant Ninja Turtles 2: The Secret of the Ooze<br>
                    <input type="radio" name="movie" value="7">Teenage Mutant Ninja Turtles 3<br>
                    <input type="radio" name="movie" value="8">TMNT<br>
                    <input type="radio" name="movie" value="9">Teenage Mutant Ninja Turtles (2014)<br>
                </div>
            </form>
            <div class="block">
                <input type="submit" form="turtle"><br>
                <h2>View Results</h2><br><br>
            <a href="assignments.php">Results Page</a>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
