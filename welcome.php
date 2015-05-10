<?php
?>
<html>
    <head>
        <title>Welcome!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div id="container">
            <div id="inner">
        <div id="topnav">
            <div id="maintitle">Welcome!</div>
            <ul id="topnavbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li>Other</li>
            </ul>
        </div>
        <div id="mainbody">
            
            <div class="block">
                Welcome, <?php echo $_POST["name"]; ?>!<br>
                <br>
                Your e-mail address is <?php echo $_POST["email"]; ?><br>
                <br>
                Your are majoring in <?php echo $_POST["major"]; ?><br>
                <br>
                You have been to: <br>
                    <?php if(!empty($_POST["na"])) { echo $_POST["na"] . "<br>";} ?>
                    <?php if(!empty($_POST["sa"])) { echo $_POST["sa"] . "<br>";} ?>
                    <?php if(!empty($_POST["as"])) { echo $_POST["as"] . "<br>";} ?>
                <?php if(!empty($_POST["eu"])) { echo $_POST["eu"] . "<br>";} ?>
                <?php if(!empty($_POST["af"])) { echo $_POST["af"] . "<br>";} ?>
                <?php if(!empty($_POST["au"])) { echo $_POST["au"] . "<br>";} ?>
                <?php if(!empty($_POST["an"])) { echo $_POST["an"] . "<br>";} ?>
                <br>
                Comments: <br>
                <?php echo $_POST["comment"]; ?>
            </div>
            <div class="block">
                ...
            </div>
            
        </div>
        </div>
        </div>
    </body>
</html>
