<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ha07";

$dbconn = new mysqli($servername, $username, $password, $dbname);

if($dbconn->connect_error){
    die("connection error");
}

$user = $_POST['StudentID'];
$username = $_POST['StudentName'];
$mail = $_POST['Email'];
$gropnum = $_POST['Team'];
$assess1 = $_POST['AttendanceAssessment'];
$assess2 = $_POST['WorkAssessment'];
$assess3 = $_POST['ParticipationAssessment'];
$byuser = $_POST['DoneByStudentID'];
$msg = $_POST['message'];

$sqlque = "INSERT INTO assessment (StudentID, StudentName, Email, Team, AttendanceAssessment, WorkAssessment, ParticipationAssessment, DoneByStudentID, Report) VALUES ('$user','$username','$mail','$gropnum','$assess1','$assess2','$assess3', '$byuser','$msg')";

if($dbconn->query($sqlque) === TRUE){
    ?>
<script>
    alert('Data inserted');
</script>
<?php
}
else{
    ?>
<script>
    alert('Data not inserted',);
</script>
<?php
header('location:studenthomepage.php');
}

?>