<html>
    <head>
<title> Assessment </title>
        <link rel="stylesheet" href="TeamStyle.css">
    </head>
    <body>
        
        <div class="transparent">
            <ul>
                <li><a href="studenthomepage.php">HOME</a></li>
                <li><a href="#">TEAM ASSESSMENT</a></li>
            </ul>
        </div>
        <h1 style="text-align: center">
            Assessment
        </h1>
        <form action="AssesDb.php" method="post">
        <div1 class="asses">
            <input type="text" name="DoneByStudentID" placeholder="Enter Evaluator StudentID" id="DoneByStudentID" required>
            <input type="text" name="StudentID" placeholder="Enter StudentID" id="StudentID" required>
            <input type="text" name="StudentName" placeholder="Enter StudentName" id="StudentName" required>
            <input type="text" name="Email" placeholder="Enter Email" id="Email" required>
            <input type="text" name="Team" placeholder="EnterTeamName" id="Team" required>
        </div1>

        <div2 class="asses1">
            <label for="AttendanceAssessment">Grade The Member For Attendance 1-10:</label>
            <select name="AttendanceAssessment" id="AttendanceAssessment">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <br><br>
            <label1 for="WorkAssessment">Grade The Member For Work 1-10:</label1>
            <select name="WorkAssessment" id="WorkAssessment">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <br><br>
           <label2 for="ParticipationAssessment">Grade The Member For Participation 1-10:</label2>
            <select name="ParticipationAssessment" id="ParticipationAssessment">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <br><br>
        </div2>
        <div3 class="box">    
        <p>Message</p><textarea name="message" rows="6" cols="25" id="message" required></textarea><br /> 
        </div3>
        <div4 class="btn">
         <input type="submit" name="Assess" value="Assess" onclick="correct()">
            <br><br>
        </div4>
        </form>
    </body>