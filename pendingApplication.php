<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link type="text/css" rel="stylesheet" href="./assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="./assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="./assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

        	
        <!-- Theme Styles -->
        <link href="./assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
    <title>Pending Application</title>
    <style>
        .card-title{
            padding-left: 250px;
        }
    </style>
</head>
<body>
    <?php
        include('includes/config.php');
    ?>
 <?php
    include('includes/header.php');

    include('includes/sidebar.php');
    
 ?>
   <h2 style="text-align:center">Pending Applications</h2><br><br>
<span class="card-title">Latest Leave Applications</span>
                             <table id="example" class="display responsive-table " style="margin-left: 250px">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="200">Employe Name</th>
                                            <th width="120">Leave Type</th>

                                             <th width="180">Posting Date</th>                 
                                            <th>Status</th>
                                            <th align="center">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
<?php $sql = "SELECT tblleaves.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,tblleaves.LeaveType,tblleaves.PostingDate,tblleaves.Status from tblleaves join tblemployees on tblleaves.empid=tblemployees.id order by lid desc limit 6";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{         
      ?>  

                                        <tr>
                                            <td> <b><?php echo htmlentities($cnt);?></b></td>
                                              <td><a href="editemployee.php?empid=<?php echo htmlentities($result->id);?>" target="_blank"><?php echo htmlentities($result->FirstName." ".$result->LastName);?>(<?php echo htmlentities($result->EmpId);?>)</a></td>
                                            <td><?php echo htmlentities($result->LeaveType);?></td>
                                            <td><?php echo htmlentities($result->PostingDate);?></td>
                                                                       <td><?php $stats=$result->Status;
if($stats==1){
                                             ?>
                                                 <span style="color: green">Approved</span>
                                                 <?php } if($stats==2)  { ?>
                                                <span style="color: red">Not Approved</span>
                                                 <?php } if($stats==0)  { ?>
 <span style="color: blue">waiting for approval</span>
 <?php } ?>


                                             </td>

          <td>
           <td><a href="leave-details.php?leaveid=<?php echo htmlentities($result->lid);?>" class="waves-effect waves-light btn blue m-b-xs"  > View Details</a></td>
                                    </tr>
                                         <?php $cnt++;} }?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </main>
          
        </div>

        
        
        <!-- Javascripts -->
        <script src="./assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="./assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="./assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="./assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="./assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="./assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="./assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="./assets/plugins/chart.js/chart.min.js"></script>
        <script src="./assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="./assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="./assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="./assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="./assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="./assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="./assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="./assets/js/alpha.min.js"></script>
        <script src="./assets/js/pages/dashboard.js"></script>
</body>
</html>