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

$leoAvg = round(($leonum / $resSum * 100), 2);
$donAvg = round(($donnum / $resSum * 100), 2);
$rapAvg = round(($rapnum / $resSum * 100), 2);
$micAvg = round(($micnum / $resSum * 100), 2);
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
                    <?php echo "<li class=\"leobar\" style=\"width: " . $leoAvg . "px;\">Leonardo<br>" . $leoAvg . "%</li>"; ?>
                    <?php echo "<li class=\"donbar\" style=\"width: " . $donAvg . "px;\">Donatello<br>" . $donAvg . "%</li>"; ?>
                    <?php echo "<li class=\"rapbar\" style=\"width: " . $rapAvg . "px;\">Raphael<br>" . $rapAvg . "%</li>"; ?>
                    <?php echo "<li class=\"micbar\" style=\"width: " . $micAvg . "px;\">Michaelangelo<br>" . $micAvg . "%</li>"; ?>
                </ul>
                
            </div>
        </div>
        </div>
        </div>
        <?php echo 'leonardo votes: ' . $leonum; ?><br>
                <?php echo 'don votes: ' . $donnum; ?><br>
                <?php echo 'leo percent: ' . $leoAvg; ?><br>
                <?php echo 'sum: ' . $resSum; ?>
    </body>
</html>
