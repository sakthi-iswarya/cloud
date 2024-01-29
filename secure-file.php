<?php
session_start();
error_reporting(0);
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['Submit']))
{


  
   $name=$_POST['file-name'];
   $fid=$_POST['file-id'];
  
  
  $msg=mysqli_query($con,"insert into secure(file_name,file_id) values('$name','$fid')");


 
if($msg)
{
  $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
}

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard">

    <title>Admin </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Cloud Admin </b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
             <ul class="sidebar-menu" id="nav-accordion">       
                 
                  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>       
                  <li class="mt"><a href="dashboard.php"><i class="fa fa-file"></i><span>Dashboard</span></a></li>
                  <li class="mt"><a href="add-file.php"> <i class="fa fa-file"></i><span>Add File </span></a> </li>
                  <li class="mt"><a href="secure-file.php"> <i class="fa fa-file"></i><span>Secure File </span></a> </li>
                 
                  <li class="mt"><a href="reports.php"><i class="fa fa-file"></i><span>File Reports</span></a></li> 
               
                  <li class="mt"><a href="change-password.php"><i class="fa fa-file"></i><span>Change Password</span></a></li>
                  <li class="sub-menu"><a href="manage-users.php" ><i class="fa fa-users"></i><span>Manage Users</span></a></li>
              
              </ul>   
                
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Secure File  </h3>
        <div class="row">
        
                  
                    
                  <div class="col-md-12">
                      <div class="content-panel">
                          <form class="form-horizontal style-form" name="form1" method="post" enctype="multipart/form-data" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">File Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="file-name" value="" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Encrypt Id</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="file-id" value="" >
                              </div>
                          </div>
                          
                         
                          

                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Secure File" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
    </section>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  

  </body>
</html>
<?php } ?>
