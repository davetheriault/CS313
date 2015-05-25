<?php
$reslts = file_get_contents($file);
//number of votes for leonardo
$leonum = substr_count($reslts, "1");
//number of votes for donatello
$donnum = substr_count($reslts, "2");
//number of votes for raphael
$rapnum = substr_count($reslts, "3");
//number of votes for mike
$micnum = substr_count($reslts, "4");

$resSum = ($leonum + $donnum + $rapnum + $micnum);

$leoAvg = ($resSum / $leonum);
$donAvg = ($resSum / $donnum);
$rapAvg = ($resSum / $rapnum);
$micAvg = ($resSum / $micnum);
?>
<html>
    <head>
        <title>Results</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div id="container">
            <div id="inner">
        
                <?php include 'include/navbar.php'; ?>

        <div id="mainbody">
            <h1>Results</h1>
            <div class="block">
                <h2>Favorite Ninja Turtle:</h2><br><br>
                <ul class="barGraph">
                    <?php echo "<li style=\"height: " . $leoAvg . "px; left: 0px;\">" . $leoAvg . "%</li>"; ?>
                </ul>
                
            </div>
        </div>
                <?php echo 'leonardo votes: ' . $leonum; ?><br>
                <?php echo 'don votes: ' . $donnum; ?><br>
                <?php echo 'leo percent: ' . $leoAvg; ?><br>
                <?php echo 'sum: ' . $resSum; ?>
        </div>
        </div>
    </body>
</html>
