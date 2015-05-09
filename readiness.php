<?php
?>
<html>
    <head>
        <title>TEAM READINESS ACTIVITY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div id="container">
            <div id="inner">
        <div id="topnav">
            <div id="maintitle">Team Readiness Activity</div>
            <ul id="topnavbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li>Other</li>
            </ul>
        </div>
        <div id="mainbody">
            <div id="rightmain">
                <form action="welcome.php" method="post" id="about">

                    <div class="block">
                        Name: <br><input type="text" name="name">
                    </div>
                    <div class="block">
                        E-Mail: <br><input type="text" name="email">
                    </div>
                    <div class="block">
                        Major: <br>
                        <input type="radio" name="major" value="Computer Science"><br>
                        <input type="radio" name="major" value="Web Development and Design"><br>
                        <input type="radio" name="major" value="Computer information Technology"><br>
                        <input type="radio" name="major" value="Computer Engineering">
                    </div>
                    <div class="block">
                        Places you have visited: <br>
                        <input type="checkbox" name="visited" value="North America"><br>
                        <input type="checkbox" name="visited" value="South America"><br>
                        <input type="checkbox" name="visited" value="Asia"><br>
                        <input type="checkbox" name="visited" value="Europe"><br>
                        <input type="checkbox" name="visited" value="Africa"><br>
                        <input type="checkbox" name="visited" value="Australia"><br>
                        <input type="checkbox" name="visited" value="Antartica"><br>
                    </div>
                </form>
                <div class="block">
                        Comments: <br>
                        <textarea name="comment" form="about" rows="4" cols="60"></textarea>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
