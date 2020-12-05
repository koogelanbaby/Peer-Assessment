<?php 

session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ha07";
$conn = new mysqli($servername, $username, $password, $dbname);

$studID = $_POST['StudentID'];
$pass = $_POST['Password'];

$x = "select * from collegestudent where StudentID = '$studID' && Password ='$pass'";

$show = mysqli_query($conn, $x);

if($show == 1)
    {
    $_SESSION['StudentID']=$studID;
	   ?>
<script>
    alert('Login Successfully');
</script>
<?php
    header('location:studenthomepage.php');
	}
else
    {
     ?>
       <script>
       alert('Login Failed');
       </script>
    <?php
	header('location:LOGIN.php');
	}

if($studID=='000000000' && $pass=='000000000')
    {
       ?>
<script>
    alert('Login Successfully');
</script>
<?php
    header('location:HomePage.php');
    }

    else
    {
        ?>
        <script>
        alert('Login Failed');
        </script>
        <?php
    }

?>