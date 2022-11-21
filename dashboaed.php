<?php 
include('server.php');

if(!isset($_SESSION['id']))  header('location:logIn.php');


?>
<!DOCTYPE html>
<html lang="en">

<body>
<!--Main Navigation-->

<?php include('head.php'); ?>

<?php include('header.php'); ?>

  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="  margin-top: 58px;">
   
    <ol class="breadcrumb pt-3 ps-3 h5">

      <li class="breadcrumb-item active" >Dashboard</li>
    </ol>
    <h1 class="Weclome ps-3">Weclome back<span class="text-dark"> <?php  echo $rows['first_name'];  ?>  </span> 👋 !! </h1>
    
    <h3 class=" ps-3 ">statistics:</h3>
    
   
    <section class="ps-3 pe-3 ">
      <div class="part2">
      
          <section  class="carts container-fluid">
             <h2>📚 number of Books</h2>
             <br>
             <br>
              <h1> <?php countbooks(); ?><span> book </span></H1>
            </section>
     
         <section class="carts container-fluid">
             
             <h2>👨‍💼 Admins </h2> 
             <br>
             <br>
             <h1><?php adminscount(); ?><span> mumbers </span></H1>
         </section>

         <section class="carts container-fluid">
             <h2>📈 sum price of Books  </h2>
              <br>
              <br>
              <h1><?php count_price(); ?><span> DH </span></H1>
         </section>  

         
        
     </div>
  </section>

  </main>
  <!--Main layout-->
      
  
    
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
    ></script>
</body>
</html>