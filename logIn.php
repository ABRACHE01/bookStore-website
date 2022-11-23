

<?php 
include('server.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    
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
   
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">log in</p>


                        
                          <form  method="post"   >

                     <!-- To show errors is user put wrong data -->

                       <div class="error badge badge-danger rounded-4 mb-4  "><?php echo  $error2; ?></div>

                      <div class="form-outline mb-4">
                        <input type="email" id="Logemail" name="email" class="form-control form-control-lg"  />
                        <label class="form-label" for="Logemail">Email address</label>
                      </div>
          
                      <div class="form-outline mb-4">
                        <input type="password" id="lpassword" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="lpassword">Password</label>
                      </div>
          
                      <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block" type="submit"  name="logIn" >Login</button>
                      </div>
          
                      <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>
          
                    </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
          
                          <img src="pics/b.png"
                            class="img-fluid" alt="Sample image">
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

            <script
              type="text/javascript"
              src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
            ></script>

           
         

    </body>
</html>