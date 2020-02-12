<?php 
    require_once("includes/config.php");
    $result = $dbh->prepare("SELECT * FROM admin_leave_policy");
    $result->execute();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <style>
     

        h1{
            padding: 1em 0 0 0;
            text-align: center;
            font-size: 1.87em;
            letter-spacing: 1px;
        }

        h2 {
            text-align: center;
            letter-spacing: 1px;
            font-size: 1.60em;
            padding: 1.60em 0 0.40em 0;
            font-weight: 400;
        }
        p{
            padding: 0 3em 0 17em;
            letter-spacing: 1px;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <?php
        include('includes/header.php');
    ?>
    <?php
        include('includes/sidebar.php');
    ?>
    <div class="container">
        <h1>Leave Policy Report</h1>
        <?php 
                     require_once("includes/config.php");
                     $result = $dbh->prepare("SELECT * FROM admin_leave_policy");
                     $result->execute();                      
             for($i=0;  $row = $result->fetch(); $i++){?>

 

            <h2>Leave Policy</h2>
            <p><?php echo $row['Leave_policy']; ?></p> 

            <h2>Annual Leave</h2>
            <p><?php echo $row['Annual_leave']?></p>    

            <h2>Study Leave</h2>
            <p><?php echo $row['Study_leave'] ?></p> 

            <h2>Family Responsibility Leave</h2>
            <p><?php echo $row['Family_responsibility_leave'] ?></p>       
            
            <h2>Maternity Leave</h2>
            <p><?php echo $row['Maternity_leave'] ?></p> 

            <h2>Sick leave</h2>
            <p><?php echo $row['sickleave'] ?></p>  
            
            <h2>Unpaid leave</h2>
            <p><?php echo $row['Unpaid_leave'] ?></p>
            <?php }
        ?> 
    </div>   
            <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/form_elements.js"></script>
        
</body>
</html>

