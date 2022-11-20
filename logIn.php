<?php 
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

            <link href="style/style.css" rel="stylesheet">

                <!-- this is the mdbootstrape links  -->
            
            <!-- Font Awesome -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
            />
            <!-- Google Fonts -->
            <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
            />
            <!-- MDB -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
            rel="stylesheet"
            />

                   <!-- the end of the mdbootstrap  -->
</head>

<body>
      <section class="vh-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 text-black">
        
                  <div class="px-5 ms-xl-4">
                    <i class="fas fa-book fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Books</span>
                  </div>
        
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <!-- this is the form  -->

                    <form style="width: 23rem;"  method="post" >

                     <!-- To show errors is user put wrong data -->
                       <div class="error badge badge-danger rounded-4 container-fluid mb-4 "><?php echo  $error2; ?></div>


                      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                      <div class="form-outline mb-4">
                        <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example18">Email address</label>
                      </div>
          
                      <div class="form-outline mb-4">
                        <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example28">Password</label>
                      </div>
          
                      <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block" type="submit"  name="logIn" >Login</button>
                      </div>
          
                      <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                      <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>
          
                    </form>
                    <!-- this is the end of the form  -->
                </div>
        
              </div>
              <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="pics/pexels-cottonbro-studio-4153146.jpg"
                  alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
              </div>
            </div>
          </div>
      </section>
      
       <!-- MDB -->
       <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
            ></script>
    
</body>
</html>