<!DOCTYPE html>
 
<body>
<style>
     table , th, td{
        width: 100%;
        padding: absolute;
        margin: auto;
        border: 1px solid white;
        border-collapse: collapse;
        text-align: center;
        font-size: 15px;
        table-layout: fixed;
        background: rgba(0,0,0,0.4);
        opacity: 0.5;
        color: white;
        margin-top: 60px;
}
     th, td{
         padding: 25px;
         opacity: 1.2;
}
</style>

</body>
<?php

include 'HomePage.php';
$con = new PDO("mysql:host=localhost;dbname=ha07",'root','');

if (isset($_POST["searchbtn"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `assessment` WHERE StudentID = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				 <th>StudentID</th>
	                    <th>StudentName</th>
	                    <th>Email</th>
	                    <th>Team</th>
	                    <th>Attendance
                            Assessment</th>
                        <th>Work
                            Assessment</th>
                        <th>Participation
                            Assessment</th>
                        <th>DoneBy
                            StudentID</th>
                        <th>Report</th>
            </tr>
			<tr>
				<td><?php echo $row->StudentName; ?></td>
				<td><?php echo $row->Email;?></td>
                <td><?php echo $row->Team;?></td>
                <td><?php echo $row->AttendanceAssessment;?></td>
                <td><?php echo $row->WorkAssessment;?></td>
                <td><?php echo $row->ParticipationAssessment;?></td>
                <td><?php echo $row->DoneByStudentID;?></td>
                <td><?php echo $row->Report;?></td>  
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
