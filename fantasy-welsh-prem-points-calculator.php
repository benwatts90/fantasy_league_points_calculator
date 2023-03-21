<!DOCTYPE html>
<html>
<head>
    <title>Points Calculator</title>
    <style>
        body {
            background-color: slateblue;
        }
        .form {
            background-color: white;
            width: 70%;
        }
        .field {
            margin: 5px;
        }
    </style>
</head>
    
<body>
<form class="form" action="points-calculator-processor.php" method="post">
    
Player position:<br>
<input type="radio" name="player_position" id="defender" value="defender"><label for="defender">Defender</label>
<br>
<input type="radio" name="player_position" id="midfielder" value="midfielder"><label for="midfielder">Midfielder</label>
<br>
<input type="radio" name="player_position" id="goal_keeper" value="goal_keeper"><label for="goal_keeper">Goal keeper</label>
<br>
<input type="radio" name="player_position" id="striker" value="striker"><label for="striker">Striker</label>
<br><br>
    
Did they play?:<br>
<input type="radio" name="played" id="played_yes" value="played_yes"><label for="played_yes">Yes</label>
<br>
<input type="radio" name="played" id="played_no" value="played_no"><label for="played_no">No</label>
<br><br>
    
goals scored: <input class="field" type="number" name="goals_scored">
<br>
goals conceded: <input class="field" type="number" name="goals_conceded">
<br>
clean sheet: <br>
<input type="radio" name="clean sheet" id="clean_sheet_yes"
value="clean_sheet_yes"><label for="clean_sheet_yes">Yes</label>
<br>
<input type="radio" name="clean_sheet" id="clean_sheet_no" value="clean_sheet_no"><label for="clean_sheet_no">No</label>
<br><br>
    
penalties missed: <input class="field" type="number" name="penalties_missed">
<br>
yellow cards: <input class="field" type="number" name="yellow_cards">
<br>
red cards: <input class="field" type="number" name="red_cards">
<br>
own goals: <input class="field" type="number" name="own_goals">
<br>
<input type="submit">
</form>

</body>
</html>