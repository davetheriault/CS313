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

//color vote numbers
$numblu = substr_count($reslts, "b");
$numpur = substr_count($reslts, "p");
$numred = substr_count($reslts, "r");
$numora = substr_count($reslts, "o");

//Villain votes
$numshr = substr_count($reslts, "s");
$numkra = substr_count($reslts, "k");
$numroc = substr_count($reslts, "y");
$numbee = substr_count($reslts, "e");

//movie votes
$numTMNT1 = substr_count($reslts, "5");
$numTMNT2 = substr_count($reslts, "6");
$numTMNT3 = substr_count($reslts, "7");
$numTMNT  = substr_count($reslts, "8");
$numTMNT0 = substr_count($reslts, "9");

//total turtle votes
$resSum = ($leonum + $donnum + $rapnum + $micnum);
//turtle averages
$leoAvg = round(($leonum / $resSum * 100), 2);
$donAvg = round(($donnum / $resSum * 100), 2);
$rapAvg = round(($rapnum / $resSum * 100), 2);
$micAvg = round(($micnum / $resSum * 100), 2);

//total color votes
$colSum = ($numblu + $numpur + $numred + $numora);
//color averages
$bluAvg = round(($numblu / $colSum * 100), 2);
$purAvg = round(($numpur / $colSum * 100), 2);
$redAvg = round(($numred / $colSum * 100), 2);
$oraAvg = round(($numora / $colSum * 100), 2);

//total villain
$vilSum = ($numshr + $numkra + $numbee + $numroc);
//percent villain
$shrAvg = round(($numshr / $vilSum * 100), 2);
$kraAvg = round(($numkra / $vilSum * 100), 2);
$rocAvg = round(($numroc / $vilSum * 100), 2);
$beeAvg = round(($numbee / $vilSum * 100), 2);

$movSum = ($numTMNT + $numTMNT0 + $numTMNT1 + $numTMNT2 + $numTMNT3);
$tmn1Avg = round(($numTMNT1 / $movSum * 100), 2);
$tmn2Avg = round(($numTMNT2 / $movSum * 100), 2);
$tmn3Avg = round(($numTMNT3 / $movSum * 100), 2);
$tmntAvg = round(($numTMNT / $movSum * 100), 2);
$tmn0Avg = round(($numTMNT0 / $movSum * 100), 2);
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
                <h2>Favorite Ninja Turtle:</h2><br><?php echo $resSum . ' total votes'; ?><br>
                <ul class="barGraph">
                    <?php echo "<li class=\"leobar\" style=\"width: " . $leoAvg*3 . "px;\">Leonardo<br>" . $leoAvg . "%</li>"; ?>
                    <?php echo "<li class=\"donbar\" style=\"width: " . $donAvg*3 . "px;\">Donatello<br>" . $donAvg . "%</li>"; ?>
                    <?php echo "<li class=\"rapbar\" style=\"width: " . $rapAvg*3 . "px;\">Raphael<br>" . $rapAvg . "%</li>"; ?>
                    <?php echo "<li class=\"micbar\" style=\"width: " . $micAvg*3 . "px;\">Michaelangelo<br>" . $micAvg . "%</li>"; ?>
                </ul>
            </div>
            <div class="block">
                <h2>Favorite Color:</h2><br><?php echo $colSum . ' total votes'; ?> <br>
                <ul class="barGraph">
                    <?php echo "<li class=\"leobar\" style=\"width: " . $bluAvg*3 . "px;\">Blue<br>" . $bluAvg . "%</li>"; ?>
                    <?php echo "<li class=\"donbar\" style=\"width: " . $purAvg*3 . "px;\">Purple<br>" . $purAvg . "%</li>"; ?>
                    <?php echo "<li class=\"rapbar\" style=\"width: " . $redAvg*3 . "px;\">Red<br>" . $redAvg . "%</li>"; ?>
                    <?php echo "<li class=\"micbar\" style=\"width: " . $oraAvg*3 . "px;\">Orange<br>" . $oraAvg . "%</li>"; ?>
                </ul>
            </div>
            <div class="block">
                <h2>Favorite Villain:</h2><br><?php echo $vilSum . ' total votes'; ?> <br>
                <ul class="barGraph">
                    <?php echo "<li class=\"donbar\" style=\"width: " . $shrAvg*3 . "px;\">Shredder<br>" . $shrAvg . "%</li>"; ?>
                    <?php echo "<li class=\"krabar\" style=\"width: " . $kraAvg*3 . "px;\">Krang<br>" . $kraAvg . "%</li>"; ?>
                    <?php echo "<li class=\"rocbar\" style=\"width: " . $rocAvg*3 . "px;\">Rocksteady<br>" . $rocAvg . "%</li>"; ?>
                    <?php echo "<li class=\"rapbar\" style=\"width: " . $beeAvg*3 . "px;\">Beebop<br>" . $beeAvg . "%</li>"; ?>
                </ul>
            </div>
            <div class="block">
                <h2>Favorite Movie:</h2><br><?php echo $movSum . ' total votes'; ?> <br>
                <ul class="barGraph">
                    <?php echo "<li class=\"greenbar\" style=\"width: " . $tmn1Avg*3 . "px;\">Teenage Mutant Ninja Turtles (1990)<br>" . $tmn1Avg . "%</li>"; ?>
                    <?php echo "<li class=\"greenbar\" style=\"width: " . $tmn2Avg*3 . "px;\">Teenage Mutant Ninja Turtles 2: The Secret of the Ooze<br>" . $tmn2Avg . "%</li>"; ?>
                    <?php echo "<li class=\"greenbar\" style=\"width: " . $tmn3Avg*3 . "px;\">Teenage Mutant Ninja Turtles 3<br>" . $tmn3Avg . "%</li>"; ?>
                    <?php echo "<li class=\"greenbar\" style=\"width: " . $tmntAvg*3 . "px;\">TMNT<br>" . $tmntAvg . "%</li>"; ?>
                    <?php echo "<li class=\"greenbar\" style=\"width: " . $tmn0Avg*3 . "px;\">Teenage Mutant Ninja Turtles (2014)<br>" . $tmn0Avg . "%</li>"; ?>
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
