<?php 
	include 'conn.php';
	$margin = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5000;
	$screen = isset($_GET['page']) ? $_GET['page'] : 1;
	$begin = ($screen - 1) * $margin;
	$result = $conn->query("SELECT * FROM assessment LIMIT $begin, $margin");
	$students = $result->fetch_all(MYSQLI_ASSOC);

	$output = $conn->query("SELECT count(StudentID) AS StudentID FROM assessment");
	$custCount = $output->fetch_all(MYSQLI_ASSOC);
	$fullcount = $custCount[0]['StudentID'];
	$pages = ceil( $fullcount / $margin );

	$Previous = $screen - 1;
	$Next = $screen + 1;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
    <link rel="stylesheet" href="Pagisheet.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../library/css/bootstrap.min.css"/>
	<script type="text/javascript" src="../library/js/jquery-3.2.1.min.js"></script>
</head>
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
<body>
    <div class="searchbox">
            <input class="searchtxt" type="text" name="search" placeholder="Search">
            <a class="searchbtn" href="searchres.php">
                <i class="fas fa-search"></i>
            </a>
        
        
            <div class="square">
                <a href="logout.php">LOGOUT</a>
            </div>        
        </div>  
	<div class="container well">
		<h1 class="text-center">Lecture DataSource Of StudentInformation</h1>
		<div class="row">
			<div class="transparent">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li>
				      <a href="HomePage.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; Previous</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li><a href="HomePage.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <li>
				      <a href="HomePage.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">Next &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			<div class="text-center" style="margin-top: 20px; " class="col-md-2">
				<form method="post" action="#">
						<select name="limit-records" id="limit-records">
							<option disabled="disabled" selected="selected">---Limit Records---</option>
							<?php foreach([10,100,500,1000,5000] as $margin): ?>
								<option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $margin) echo "selected" ?> value="<?= $margin; ?>"><?= $margin; ?></option>
							<?php endforeach; ?>
						</select>
					</form>
				</div>
		</div>
		<div style="height: 600px; overflow-y: auto;">
			<table id="Pagintable" class="table table-striped table-bordered">
	        	<thead>
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
	          	</thead>
	        	<tbody>
	        		<?php foreach($students as $student) :  ?>
		        		<tr>
		        			<td><?= $student['StudentID']; ?></td>
		        			<td><?= $student['StudentName']; ?></td>
		        			<td><?= $student['Email']; ?></td>
		        			<td><?= $student['Team']; ?></td>
		        			<td><?= $student['AttendanceAssessment']; ?></td>
                            <td><?= $student['WorkAssessment']; ?></td>
                            <td><?= $student['ParticipationAssessment']; ?></td>
                            <td><?= $student['DoneByStudentID']; ?></td>
                            <td><?= $student['Report']; ?></td>
		        		</tr>
	        		<?php endforeach; ?>
	        	</tbody>
      		</table>

      		
		</div>
<script>
   $(document).ready(function(){
       $('#Pagintable').DataTable();
   });    
</script>        
        

<script type="text/javascript">
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
</script>
    </div>
</body>
</html>
