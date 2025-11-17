<?php
$title = "My Mind Is a Maze";
$artist = "Alannah Guiney";
$mood = "reflective";
$verseCount = 1 + '1';
$chorusCount = true;
$nounDays = "days";
$nounMind = "mind";
$nounMaze = "maze";
$verbIs = "is";
$timeNum = 2;
$time1 = $timeNum * $timeNum;
$time2 = $timeNum + 3;
$nouns = ["bed", "feelings", "Minotaur", "list", "procrastination", "songs"];
$verbs = [
    "laying", "Contemplating", "said", "cross", "inclined", "write", "Guarded", "watch",
    "consists", "overthinking", "reminiscing", "change", "gets", "know", "hate",
    "still up", "still thinking", "do", "overtaking", "Write", "waiting", "come", "lost"
];
$verse1 = [
    "It's currently ", //0
    " a.m., I'm ", //1
    " in my ", //2
    " everything, everything I've ever ", //3
    "You do ", //4
    " my ", //5
    " sometimes, for that, I feel ", //6
    "To ", //7
    " all of my ", //8
    " down, the ", //9
    " that is my ", //10
    " by a ", //11
    ", ", //12
    " when you're going forwards", //13
    "A ", //14
    " that just ", //15
    " of ", //16
    " and ", //17
    " of "]; //18
$chorus = [
    "Where simple matters could ", //0
    " our afters", //1
    "And sometimes it ", //2
    " hazy", //3
    "Justifies the ", //4
    " that I'm lazy", //5
    "The ", //6
    " where I ", //7
    " they all ", //8
    " me", //9
    "They "]; //10
$verse2 = [
    "Now it's almost ", //0
    " a.m. and I'm ", //1
    "I'm ", //2
    "I got so much to ", //3
    " right now, ", //4
    "Up! ", //5
    " a useless ", //6
    " for you to ", //7
    " along again", //8
    "Into my ", //9
    " today, welcome, my ", //10
    " a "]; //11
$outro = [
    "Oh, a maze", //0
    "My mind is a maze", //1
    "My mind is a maze", //2
    "And I get lost sometimes"]; //3
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Mind Is a Maze</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <h2><i>by</i> <?php echo $artist; ?></h2>
        <p>My Mind Is a Maze is a <?php echo $mood; ?> song. It has <?php echo $verseCount; ?> verses and <?php echo $chorusCount; ?> chorus.</p>
        
        <h3>Verse 1</h3>
        <p><?= $verse1[0] . $time1 . $verse1[1] ?><?= $verbs[0] ?><?= $verse1[2] ?><?= $nouns[0] ?></p>
        <p><?= $verbs[1] . $verse1[3] . $verbs[2] ?></p>
        <p><?= $verse1[4] . $verbs[3] . $verse1[5] . $nounMind . $verse1[6] . $verbs[4] ?></p>
        <p><?= $verse1[7] . $verbs[5] . $verse1[8] . $nouns[1] . $verse1[9] . $nounMaze . $verse1[10] . $nounMind ?></p>
        <p><?= $verbs[6] . $verse1[11] . $nouns[2] . $verse1[12] . $verbs[7] . $verse1[13]?></p>
        <p><?= $verse1[14] . $nouns[3] . $verse1[15] . $verbs[8] . $verse1[16] . $verbs[9] . $verse1[17] . $verbs[10]?></p>
        <p><?= $verbs[6] . $verse1[11] . $nouns[2] . $verse1[12] . $verbs[7] . $verse1[13]?></p>
        <p><?= $verse1[14] . $nouns[3] . $verse1[15] . $verbs[8] . $verse1[16] . $verbs[9] . $verse1[17] . $verbs[10] . $verse1[18] . $nounDays ?></p>
    
        <h3>Chorus</h3>
        <p><?= $chorus[0] . $verbs[11] . $chorus[1] ?></p>
        <p><?= $chorus[2] . $verbs[12] . $chorus[3] ?></p>
        <p><?= $chorus[4] . $nounDays . $chorus[5] ?></p>
        <p><?= $chorus[6] . $nounDays . $chorus[7] . $verbs[13] . $chorus[8] . $verbs[14] . $chorus[9] ?></p>
        <p><?= $chorus[10] . $verbs[14] . $chorus[9] ?></p>

        <h3>Verse 2</h3>
        <p><?= $verse2[0] . $time2 . $verse2[1] . $verbs[15] . $verse2[2] . $verbs[16] ?></p>
        <p><?= $verse2[3] . $verbs[17] . $verse2[4] . $nouns[4] . ' ' . $verbIs . ' ' . $verbs[18] ?></p>
        <p><?= $verse2[5] . $verbs[19] . $verse2[6] . $nouns[5] . ', ' . $verbs[20] . $verse2[7] . $verbs[21] . $verse2[8] ?></p>
        <p><?= $verse2[9] . $nounMind . $verse2[10] . $nounMind . ' ' . $verbIs . ' ' . $verse2[11] . $nounMaze ?></p>
    </body>
</html>



