<?php
//string variables
$title = "My Mind Is a Maze";
$artist = "Alannah Guiney";
$mood = "pensive";

//type juggling examples
$verseCount = 1 + '1';
$chorusCount = true;

//repeating nouns and verbs across the lyrics
$nounDays = "days";
$nounMind = "mind";
$nounMaze = "maze";
$verbIs = "is";

//variables that apply operators
$timeNum = 2;
$time1 = $timeNum * $timeNum;
$time2 = $timeNum + 3;

//array for nouns and verbs
$nouns = ["bed", "feelings", "Minotaur", "list", "procrastination", "songs"];
$verbs = [
    "laying", "Contemplating", "said", "cross", "inclined", "write", "Guarded", "watch",
    "consists", "overthinking", "reminiscing", "change", "gets", "know", "hate",
    "still up", "still thinking", "do", "overtaking", "Write", "waiting", "come", "lost"];

//for verse 1, chorus, verse 2, and outro, i sliced the lyrics into indexed arrays so i can insert the nouns and verbs in between the lyrics
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
    "Oh, a ", //0
    "My ", //1
    " a ", //2
    "And I get ", //3
    " sometimes"]; //4
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Mind Is a Maze</title>
        <style>
            body {
                font-family: 'Times New Roman', serif;
                margin: 20px;
                line-height: 1.6;
                background-color: #fafaf8;}
            main {
                background-color: #efede6;
                width: 50%;
                margin: auto;
                padding: 20px;
                border-radius: 8px;
                text-align: center;}
            h1 {color: #676663;}
            h2, h3 {
                color: #a1998f;
                font-weight: bold;}
            h2 {text-shadow: 1px 1px 2px #d3d1c8;}
            p {
                color: #4a4a48;
                margin-bottom: 10px;}
        </style>
    </head>
    <body>
        <!-- for displaying the whole lyrics, i completely utilized concatenation for a readable and neater lines of code -->
        <main>
            <!-- shows the use of echo -->
            <h1><?php echo $title; ?></h1>
            <h2><i>by</i> <?php echo $artist; ?></h2>
            <p>"My Mind Is a Maze" is a <?php echo $mood; ?> song. It has <?php echo $verseCount; ?> verses and <?php echo $chorusCount; ?> chorus.</p>

            <!-- uses shorthand for better readability -->
            <h3>[Verse 1]</h3>
            <p><?= $verse1[0] . $time1 . $verse1[1] ?><?= $verbs[0] ?><?= $verse1[2] ?><?= $nouns[0] ?></p>
            <p><?= $verbs[1] . $verse1[3] . $verbs[2] ?></p>
            <p><?= $verse1[4] . $verbs[3] . $verse1[5] . $nounMind . $verse1[6] . $verbs[4] ?></p>
            <p><?= $verse1[7] . $verbs[5] . $verse1[8] . $nouns[1] . $verse1[9] . $nounMaze . $verse1[10] . $nounMind ?></p>
            <p><?= $verbs[6] . $verse1[11] . $nouns[2] . $verse1[12] . $verbs[7] . $verse1[13]?></p>
            <p><?= $verse1[14] . $nouns[3] . $verse1[15] . $verbs[8] . $verse1[16] . $verbs[9] . $verse1[17] . $verbs[10]?></p>
            <p><?= $verbs[6] . $verse1[11] . $nouns[2] . $verse1[12] . $verbs[7] . $verse1[13]?></p>
            <p><?= $verse1[14] . $nouns[3] . $verse1[15] . $verbs[8] . $verse1[16] . $verbs[9] . $verse1[17] . $verbs[10] . $verse1[18] . $nounDays ?></p>
        
            <h3>[Chorus]</h3>
            <p><?= $chorus[0] . $verbs[11] . $chorus[1] ?></p>
            <p><?= $chorus[2] . $verbs[12] . $chorus[3] ?></p>
            <p><?= $chorus[4] . $nounDays . $chorus[5] ?></p>
            <p><?= $chorus[6] . $nounDays . $chorus[7] . $verbs[13] . $chorus[8] . $verbs[14] . $chorus[9] ?></p>
            <p><?= $chorus[10] . $verbs[14] . $chorus[9] ?></p>
    
            <h3>[Verse 2]</h3>
            <p><?= $verse2[0] . $time2 . $verse2[1] . $verbs[15] . $verse2[2] . $verbs[16] ?></p>
            <p><?= $verse2[3] . $verbs[17] . $verse2[4] . $nouns[4] . ' ' . $verbIs . ' ' . $verbs[18] ?></p>
            <p><?= $verse2[5] . $verbs[19] . $verse2[6] . $nouns[5] . ', ' . $verbs[20] . $verse2[7] . $verbs[21] . $verse2[8] ?></p>
            <p><?= $verse2[9] . $nounMind . $verse2[10] . $nounMind . ' ' . $verbIs . ' ' . $verse2[11] . $nounMaze ?></p>
    
            <h3>[Outro]</h3>
            <p><?= $outro[0] . $nounMaze ?></p>
            <p><?= $outro[1] . $nounMind . ' ' . $verbIs . ' ' . $outro[2] . $nounMaze?></p>
            <p><?= $outro[1] . $nounMind . ' ' . $verbIs . ' ' . $outro[2] . $nounMaze?></p>
            <p><?= $outro[3] . $verbs[22] . $outro[4] ?></p>
        </main>
    </body>
</html>


