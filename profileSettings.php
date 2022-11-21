<?php 
include('server.php');
if(!isset($_SESSION['id'])) header('location:logIn.php');


?>
<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>


<?php include('header.php'); ?>



  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">

  <?php if (isset($_SESSION['messag'])): ?>
				<div class="alert alert-success alert-dismissible fade show">
				<strong>Success!</strong>
					<?php 

						echo $_SESSION['messag']; 
						unset($_SESSION['messag']);
					?>
					<button type="button" class="btn-close" data-mdb-dismiss="alert"></span>

				</div>
			<?php endif ?>

  

    <ol class="breadcrumb pt-3 ps-3 h5">
      <li class="breadcrumb-item active" aria-current="page"><a href="dashboaed.php">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">my profile</li>
    </ol>
    <h3 class=" ps-3 ">
      My profile
    </h3>
    

    <div class="container rounded bg-white mt- mb-5">
      <div class="row">
          <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php  echo $rows['first_name'];  ?> <?php echo $rows['last_name'];  ?></span><span class="text-black-50"> <?php  echo $rows['email']; ?> </span><span> </span></div>
          </div>
          <div class="col-md-9 border-right">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Settings</h4>
                  </div>
                  <form  method="post">
                  <div class="row mt-2">
                      <div class="col-md-6"><label class="labels">Name</label><input type="text" name="firstName" class="form-control " placeholder="first name" value="<?php  echo $rows['first_name'];  ?>" ></div>
                      <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="lastName" class="form-control " value="<?php  echo $rows['last_name'];  ?>" placeholder="surname" ></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control "  name="mobileNum" placeholder="enter phone number" value="<?php echo $rows['phoneNumber']; ?>" ></div>
                      <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control " name="email"  placeholder="enter email id" value="<?php echo $rows['email'];  ?> " ></div>
                      <!-- <div class="col-md-12"><label class="labels">password</label><input type="text" class="form-control" placeholder="enter new password" value="<?php ; ?>"></div>
                      <div class="col-md-12"><label class="labels">confirme password</label><input type="text" class="form-control" placeholder="confirme password" value="<?php ; ?>"></div> -->

                  </div>
                 
                  <div class="mt-5 text-center"><button class="btn btn-primary profile-button"  name="Save"  type="sybmit" >Save Profile</button></div>

                  </form>
              </div>
          </div>
         
      </div>
  </div>
  </div>
  </div>
  
         
  </main>
  <!--Main layout-->

              <script
                type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
                ></script>
  
    
  
</body>
</html>