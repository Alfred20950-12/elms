<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Admin | Important Days</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.mx-auto{
	position:center;
	
	margin-left:auto;
	margin-right:auto;
	width:200px;
	height:10px;
}


        </style> 

    </head>
	
    <body>
       <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
	     
	   
          <br><br>
		 
		 
 <div class="mx-auto" style="width: 60%; "> 
      <div class="contain-head" style="background: #fff;">
	  
	    <h1>Important Days</h1>
	  <!----On TABLE class i removed style of color background---->
     

<table border="1" cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th> Start date </th>
		<th>End date </th>
		<th>Name of the event </th>
	</tr>
</thead>
<tbody>
	<?php
		include('includes/config.php');
		$result = $dbh->prepare("SELECT * FROM tblimportantdays");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['Start_date']; ?></td>
		<td><?php echo $row['End_date']; ?></td>
		<td><?php echo $row['Name_of_the_event']; ?></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>

			 
</div>
</div>  
	 <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/form_elements.js"></script>
    </body>
</html>
<?php } ?>