<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$cName=$_POST['cName'];
$pos=$_POST['pos'];
$styear=$_POST['styear'];
$eyear=$_POST['eyear'];
$query=mysqli_query($con,"insert into experience(userEmail,companyName,position,startYear,endYear) values('".$_SESSION['login']."','$cName','$pos','$styear','$eyear')");
if($query)
{
$successmsg="Experience details inserted Successfully !!";
}
else
{
$errormsg="Experience details not updated !!";
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
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>RP | Education Qualification</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  
  </head>

  <body>

  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Experience</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	

                      <?php if($successmsg)
                      {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Well done!</b> <?php echo htmlentities($successmsg);?></div>
                      <?php }?>

   <?php if($errormsg)
                      {?>
                      <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Oh snap!</b> </b> <?php echo htmlentities($errormsg);?></div>
                      <?php }?>
 <?php $query=mysqli_query($con,"select * from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?>                     

  <h4 class="mb"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo htmlentities($row['fullName']);?>'s Experience </h4>
    <h5><b>Last Updated at :</b>&nbsp;&nbsp;<?php echo htmlentities($row['updationDate']);?></h5>
                      <form class="form-horizontal style-form" method="post" name="experience" >

<div class="form-group"><!--
<label class="col-sm-2 col-sm-2 control-label">Full Name</label>
<div class="col-sm-4">
<input type="text" name="fullname" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control" >
 </div>-->
<label class="col-sm-2 col-sm-2 control-label">User Email </label>
 <div class="col-sm-4">
<input type="email" name="useremail" required="required" value="<?php echo htmlentities($row['userEmail']);?>" class="form-control" readonly>
</div>
 </div>


<div class="form-group">
<table><tr>
<th class="col-sm-2 col-sm-2 control-label">Company Name</th>
<th class="col-sm-2 col-sm-2 control-label">Position </th>
<th class="col-sm-2 col-sm-2 control-label">Starting Date </th>
<th class="col-sm-2 col-sm-2 control-label">Ending Date </th>
</tr>

<tr>
<td class="col-sm-4">
<input type="text" name="cName" value="<?php echo htmlentities($row['cName']);?>" class="form-control">
</td>
<td class="col-sm-4">
<input type="text"  name="pos" value=" <?php echo htmlentities($row['pos']);?>" class="form-control">
</td>
<td class="col-sm-4">
 
<input type="text" name="styear"  value="<?php echo htmlentities($row['styear']);?>" class="form-control">
</td>
<td class="col-sm-4">
 
<input type="text" name="eyear"  value="<?php echo htmlentities($row['eyear']);?>" class="form-control">
</td>
</tr>


</table>
</div>


<!--
<label class="col-sm-2 col-sm-2 control-label">State</label>
<div class="col-sm-4">
<select name="state" required="required" class="form-control">
<option value="<?php echo htmlentities($row['State']);?>"><?php echo htmlentities($st=$row['State']);?></option>
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  if($rw['stateName']==$st)
  {
    continue;
  }
  else
  {
  ?>
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
<?php
}}
?>

</select>
</div>-->


<!--
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">User Photo</label>
<div class="col-sm-4">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png" width="256" height="256" >
<a href="update-image.php">Change Photo</a>
<?php else:?>
	<img src="userimages/<?php echo htmlentities($userphoto);?>" width="256" height="256">
	<a href="update-image.php">Change Photo</a>
<?php endif;?>
</div>

</div>









<?php } ?>
-->
                          <div class="form-group">
                           <div class="col-sm-10" style="padding-left:25% ">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>

                          </form>
                          </div>
                          </div>
                          </div>
                          
          	
          	
		</section>
      </section>
    <?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
