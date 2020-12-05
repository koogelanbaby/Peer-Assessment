<?php 

session_start(); 


?>

<html>
    <head>
        <title> HomePage </title>
        <link rel="stylesheet" href="studentstyle.css">
 <style>

     table , th, td{
        width: 50%;
        margin: auto;
        border: 1px solid white;
        border-collapse: collapse;
        text-align: center;
        font-size: 16px;
        table-layout: fixed;
        background: rgba(0,0,0,0.4);
        opacity: 0.5;
        color: white;
        margin-top: 60px;
}
     th, td{
         padding: 20px;
         opacity: 0.9;
}

</style>
        
        
    </head>
    
    <body>
        <div class="transparent">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="Team.php">TEAM ASSESSMENT</a></li>
            </ul>
        </div>
        <h1 style="text-align: center">Welcome <?php echo $_SESSION['StudentID']; ?></h1>
        <div class="log">
        <a href="logout.php">LOGOUT</a>
        </div>
<table>			
            <tr>
                <th>ID</th>
                <th>Group</th>
                <th>Email</th>
            </tr>        
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ha07";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
     $sql = "SELECT * FROM `collegestudent` WHERE NOT StudentID = ". $_SESSION['StudentID']." 
     AND Team=(Select Team from `collegestudent` WHERE StudentID= ". $_SESSION['StudentID']. ")";
     $x = mysqli_query($conn, $sql);  
      while ($row = $x->fetch_assoc()):;?>

         <tr>
             <td><?php echo $row["StudentID"] ?></td>
             <td><?php echo $row["Team"] ?></td>     
             <td><?php echo $row["Email"] ?></td>      
             <td><a href="Report.php? collegestudent = <?php echo $row['StudentID']; ?>"></a></td>
         </tr>
    
<?php endwhile;?>
        </table>    
</body>