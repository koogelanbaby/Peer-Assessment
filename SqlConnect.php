<?php


session_start();


function clean($data) {
     $data = trim($data);
     $data = stripslashes($data);
   return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ha07";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (isset($_POST['Register']))
$user= clean($_POST['StudentID']);
$pass= clean($_POST['Password']);
$email= clean($_POST['Email']);
$cap= clean($_POST['Captcha']);
$gropnum= clean($_POST['GroupName']);


 if (strlen($user)==9) {

$sqlquery = "SELECT Team from collegestudent WHERE Team = '$gropnum'";
$db = mysqli_query($conn,$sqlquery);   
  

 $query = "SELECT StudentID FROM collegestudent WHERE StudentID = '$user'";
 $output = mysqli_query($conn,$query);               
               
 if(mysqli_num_rows($db) < 3) {

  $query = "INSERT INTO collegestudent (StudentID, Password, Email, Captcha, Team) VALUES ('$user', '$pass', '$email', '$cap', '$gropnum')";

// $query = "INSERT INTO studentgroup (student_id, group_id)
                        //VALUES ('$StudentId', '$StudentGroupId')";                
                                  

if(mysqli_query($conn, $query)) 
{
$msg = "Data Created sucessfuly";
    header("location: LOGIN.php");
exit;
} 
else 
{
  echo "Error: " . $query . "<br>" . $conn->error;
}

    
}else{

     echo '<script>alert("Group has 3 members")</script>';
     
    }
 }
?>