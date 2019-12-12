<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                              <?php $query=mysqli_query($con,"select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                        <a href="profile.php" >
                          <i class="fa fa-dashboard"></i>
                          <span>Personal Information</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                   
					   <a href="education.php">
                          <i class="fa fa-cogs"></i
						  <span>Educational Qualification</span>
                      </a>
                    <!--  <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="experience.php" >
                          <i class="fa fa-book"></i>
                          <span>Experience</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="achives.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Achivement</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>