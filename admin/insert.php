<html>
<body>
<?php
 include('includes/sidebar.php');

?>
<div class="container">
       <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    
				
                <div class="panel-body">
				</div>
			
<?php

 				
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "elms";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$from = mysqli_real_escape_string($conn, $_POST['from']);
$to = mysqli_real_escape_string($conn, $_POST['to']);
$event = mysqli_real_escape_string($conn, $_POST['event']);
 
$sql = "INSERT INTO tblimportantdays(Start_date, End_date, Name_of_the_event)
 VALUES ('{$from}', '{$to}', '{$event}')";
 
if($conn->query($sql) === TRUE){
 echo "<script type='text/javascript'>alert('YOU HAVE SUCESSFULLY UPDATED CALENDER');</script>";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>
</div>	
</div>
</div>
</body>
</html>

