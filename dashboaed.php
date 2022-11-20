<?php 
include('server.php');
if(!isset($_SESSION['id'])) header('location:logIn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>

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
               
               
<style>
body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
 
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }

}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
.Weclome{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.part2{
    justify-items: center;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
    gap: 50px;
    
}

.carts{
    background-color: #fff;
    border: 3px solid wheat ;
    margin: 20px;
    padding: 20px;
    border-radius: 5px;
    
}

.tiblehead{
  background-color:rgba(123, 198, 233, 0.733);
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color:white;

}





</style>

</head>
<body>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="  collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a
            href="dashboaed.php"
            class="list-group-item list-group-item-action py-2 ripple"
            
          >
          🏠 Main dashboard
          </a>
          <a href="profileSettings.php" class="list-group-item list-group-item-action py-2 ripple ">
          👨‍💼 My profile
          </a>
          <a href="bookmodifs.php" class="list-group-item list-group-item-action py-2 ripple ">
          📚 Book modifications
          </a>
          
          <form >
          <button type="submit" name="logout" class="list-group-item list-group-item-action py-2 ripple  ">
            🚪🚶 log out 
          </button>
          </form>
          
            </div>
          
            
   
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
  
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img
            src="pics/icons8-bookcase-48.png"
            height="30"
            alt="MDB Logo"
            loading="lazy"
          /><h3 class="mb-0" >Books</h3>
        </a>
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center "
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
            <span class="text-black me-2"><?php echo $_SESSION["name"] ; ?></span>
              <img
                src="pics/icons8-administrator-male-48.png"
                class="rounded-circle"
                height="30"
                alt="Avatar"
                loading="lazy"
              />
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="profileSettings.php">My profile</a>
              </li>
             
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="  margin-top: 58px;">
   
    <ol class="breadcrumb pt-3 ps-3 h5">

      <li class="breadcrumb-item active" >Dashboard</li>
    </ol>
    <h1 class="Weclome ps-3">Weclome back<span class="text-dark"> <?php echo $_SESSION["name"] ;  ?>  </span> 👋 !! </h1>
    
    <h3 class=" ps-3">statistics:</h3>
    
   
    <section class="ps-3 ">
      <div class="part2">
      
          <section  class="carts container-fluid">
             <h2>📚 number of Books</h2>
             <br>
              <h1> <?php countbooks(); ?></H1>
            </section>
     
         <section class="carts container-fluid">
             
             <h2>👨‍💼 Admins</h2> 
             <br>
             <br>
             <h1><?php adminscount(); ?></H1>
         </section>

         <section class="carts container-fluid">
             <h2>📈 sum price of Books  </h2>
              <br>
              <br>
              <h1><?php count_price(); ?>DH</H1>
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