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

            <!-- MDB -->
            <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
            ></script>
            
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
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                          <div class="error badge badge-danger rounded-4 container-fluid mb-4 "><?php echo  $error; ?></div>

                          <form class="mx-1 mx-md-4" action="" method="post" >
                              
                             <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 d-flex flex-row align-items-center mb-4">

                                <i class="fas fa-user fa-lg me-3 fa-fw" ></i>
                                <div class="form-outline flex-fill mb-0">
                                        <input type="text" name="Firstname"  id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                    </div>
                                    <div class="col-md-6 d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                        <input type="text" name="Lastname" id="form3Example2" class="form-control" />
                                        <label class="form-label" for="form3Example2">Last name</label>
                                    </div>

                                    </div>
                                </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" name="YourEmail" id="form3Example3c" class="form-control " />
                                <label class="form-label" for="form3Example3c">Your Email</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="tel"   pattern="(?:(?:(?:\+|00)212[\s]?(?:[\s]?\(0\)[\s]?)?)|0){1}(?:5[\s.-]?[2-3]|6[\s.-]?[13-9]){1}[0-9]{1}(?:[\s.-]?\d{2}){3}$"  name="phoneNumber" id="phone" class="form-control"/>
                                <label class="form-label" for="phoneNumber">Phone number/any morrocan format</label>
                              </div>
                            </div>
                            

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" name="Password" id="form3Example4c" class="form-control" />
                                <label class="form-label" for="form3Example4c">Password</label>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" name="Repeatyourpassword" id="password" class="form-control" />
                                <label class="form-label"  for="password">Repeat your password</label>
                              </div>
                            </div>

                            <div class=" container-fluid  d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                              <button type="submit" name="SignUp" value="Sign Up" for class="btn btn-info btn-lg btn-block ">Register</button>
                            </div>

                            <p class="h6 text-center text-muted mt-5 mb-0">Have already an account? <a href="logIn.php"
                                class="fw-bold text-body"><u>Login here</u></a></p>
          
                          </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
          
                          <img src="pics/registerpic.png"
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
          <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
    </body>
</html>

