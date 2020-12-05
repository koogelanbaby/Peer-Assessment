<!DOCTYPE html>
<html lan="en" and dir="Itr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Regstyle.css">
    
</head>

<body>
    <div class="square">
    <form action="SqlConnect.php" method="POST">
    
    <h1>
        register
    </h1>
<input type="text" name="StudentID" placeholder="Enter StudentID" id="StudentID" required>
<input type="password" name="Password" placeholder="Enter Password" id="Password" required>
<input type="email" name="Email" placeholder="Enter Email" id="Email" required>
<input type="text" name="Captcha" placeholder="Enter Captcha" id="Captcha" required>
<div style="margin-top:15px;">
    <img src="capcode.php"/>
</div>
 <label for="GroupName">Choose Group:</label>
  <select name="GroupName" id="GroupName">
    <option value="Team1">Team1</option>
    <option value="Team2">Team2</option>
    <option value="Team3">Team3</option>
    <option value="Team4">Team4</option>
    <option value="Team5">Team5</option>
    <option value="Team6">Team6</option>
    <option value="Team7">Team7</option>
    <option value="Team8">Team8</option>
    <option value="Team9">Team9</option>
    <option value="Team10">Team10</option>
  </select>
  <br><br>
<input type="submit" name="Register" value="Register" onclick="correct()">  
        
    </form>
        </div>
    </body>
    
    
    
</html>