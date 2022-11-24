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
            <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
            

       <!-- the end of the mdbootstrap  -->

</head>
    <body style="background-color: #eee;">
        <section  >
            <div class="container vh-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5 vh-100">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">📔 Sign up</p>

                          <div class="error badge badge-danger rounded-4 container-fluid mb-4 "><?php echo  $error; ?></div>

                          <form class="mx-1 mx-md-4" action="" method="post" data-parsley-validate>
                              
                             <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">

                                <div class="col-md-6 d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw pt-4 " ></i>
                                <div class="flex-fill mb-0">
                                        <label class="form-label fw-bold" for="fname">First name:</label>
                                        <input type="text" name="Firstname"  id="fname" class="form-control" required data-parsley-trigger="keyup"/> 
                                    </div>

                                    </div>
                                    <div class="col-md-6 d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw pt-4 "></i>
                                        <div class="flex-fill mb-0">
                                          <label class="form-label fw-bold" for="lname">Last name:</label>
                                        <input type="text" name="Lastname" id="lname" class="form-control" required data-parsley-trigger="keyup"/>
                                        
                                    </div>

                                    </div>
                                </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw pt-4 "></i>
                              <div class="flex-fill mb-0">
                                <label class="form-label fw-bold" for="email">Your Email:</label>
                                <input type="email" name="YourEmail" id="email" class="form-control " required data-parsley-trigger="keyup"/>
                                
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-phone fa-lg me-3 fa-fw pt-4"></i>
                              <div class="flex-fill mb-0">
                              <label class="form-label fw-bold" for="phoneNumber">Phone number/any morrocan format:</label>
                                <input type="tel"   pattern="(?:(?:(?:\+|00)212[\s]?(?:[\s]?\(0\)[\s]?)?)|0){1}(?:5[\s.-]?[2-3]|6[\s.-]?[13-9]){1}[0-9]{1}(?:[\s.-]?\d{2}){3}$"  name="phoneNumber" id="phone" class="form-control" required data-parsley-trigger="keyup"/>
                              </div>
                            </div>
                            

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw pt-4"></i>
                              <div class="flex-fill mb-0"> 
                                <label class="form-label fw-bold" for="password">Password:</label>
                                <input type="password" name="Password" id="password" class="form-control" required data-parsley-trigger="keyup"/>
                               
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-key fa-lg me-3 fa-fw pt-4  "></i>
                              <div class="flex-fill mb-0">
                                <label class="form-label fw-bold fw-bold"  for="rpassword">Repeat your password:</label>
                                <input type="password" name="Repeatyourpassword" id="rpassword" class="form-control" required data-parsley-trigger="keyup"/>
                                
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
          
                          <img src="pics/photo.png"
                            class="img-fluid" alt="Sample image">
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

          <script
              type="text/javascript"
              src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
            ></script>
    </body>
</html>

