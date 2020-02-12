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
        <title>Admin | Add Important Days Into The Calender</title>
        
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
        

        </style>
    </head>
    <body>
        <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
            
			<main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title"><h3>Add Important Days Into The Calender</h3></div>
                    </div>
                   
                    <div class="container">
       <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    
                </div>
                <div class="panel-body">
				
                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <input type="date" class="form-control"  placeholder="FROM: dd/mm/yyyy" name="from">
                        </div><br><br>
                        <div class="form-group">
                            <input type="date" class="form-control"  placeholder="TO: dd/mm/yyyy" name="to">
                        </div><br><br>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="NAME OF THE EVENT" name="event">
                        </div><br><br>
                       
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
						<br><br>
						<input type="submit" formaction="importantDays.php" class="btn btn-primary" value="VIEW EVENTS">
                    </form>
                </div>
            </div>
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