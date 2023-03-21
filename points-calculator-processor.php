<?php
//declaration of variables
$goalsScored = $_POST["goals_scored"];
$goalsConceded = $_POST["goals_conceded"];
$cleanSheet = $_POST["clean_sheet"];
$penaltiesMissed = $_POST["penalties_missed"];
$yellowCards = $_POST["yellow_cards"];
$redCards = $_POST["red_cards"];
$ownGoals = $_POST["own_goals"];
$positionSelect = $_POST["player_position"];
$played = $_POST["played"];

//conditionals 
if($played == "played_yes") {
    $played = 2;
} else {
    $played = 0;
}

if($cleanSheet == "clean_sheet_yes") {
    $cleanSheet = 1;
} else {
    $cleanSheet = 0;
}

//points calculations
$keeperPoints = $played + $cleanSheet * 5 + $goalsConceded * -1 + $goalsScored * 5 + $yellowCards * -1 + $redCards * -2 + $penaltiesMissed * -1;
$strikerPoints = $played + $goalsScored * 5 + $penaltiesMissed * -1 + $yellowCards * -1 + $redCards * -2 + $ownGoals * -2;
$defenderPoints = $played + $goalsScored * 5 + $cleanSheet * 5 + $penaltiesMissed * -1 + $goalsConceded * -1 + $yellowCards * -1 + $redCards * -2 + $ownGoals * -2;
$midfieldPoints = $played + $goalsScored * 5 + $cleanSheet * 3 + $penaltiesMissed * -1 + $yellowCards * -1 + $redCards * -2 + $ownGoals * -2;

if($positionSelect == "defender") {
    echo "defender points: " . $defenderPoints;
}
if($positionSelect == "midfielder") {
    echo "midfielder points: " . $midfieldPoints;
}
if($positionSelect == "goal_keeper") {
    echo "Goal keeper points: " . $keeperPoints;
}
if($positionSelect == "striker") {
    echo "Striker points: " . $strikerPoints;
}

?>