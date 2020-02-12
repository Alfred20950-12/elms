<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{

 ?>


<!DOCTYPE html>
<html>
  <head>
    <title>Available Days</title>
	 
        <!-- Title -->
        <title>Employee | Available Days</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">

        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="./assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="./assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="./assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/css/custom.css" rel="stylesheet" type="text/css"/>
	
	<style>

 table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
</style>
  </head>
  
 <body>
 <?php
	include('includes/sidebar.php');
	?>
	<?php include('includes/header.php');
 ?>
 <br><br>
 <div class="mx-auto" style="width: 55%; " > 
      <div class="contain-head" style="background: #fff;">
	    <h3>LEAVE DAYS AVAILABLE</h3><br><br><br><br>
	  <!----On TABLE class i removed style of color background---->
      <table>
    <tr>
    
    <th>Days</th>
    <th>Type of Leave</th>
    </tr>
    <?php
    include('includes/config.php');
	
    $sql = "SELECT Days, LeaveType FROM tblleavetype";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Days"] . "</td><td>"
    . $row["LeaveType"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
	</div>
	</div>
	
	
	
	 <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="./assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="./assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="./assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="./assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="./assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="./assets/js/alpha.min.js"></script>
        <script src="./assets/js/pages/table-data.js"></script>
        
 </body>
</html>
<?php } ?>