

<?php

include('connection.php');
 $id=$_SESSION['id'];
 $query = "SELECT * FROM admin WHERE id=$id";
 $result = mysqli_query($linkDB, $query);
 $rows = mysqli_fetch_assoc($result);


 ?>


<body>
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
          <a href="bookmodifs.php" class="list-group-item list-group-item-action py-2 ripple  ">
          📚 Book modifications
          </a>

          <form >
          <button type="submit" name="logout" style=" background-color: wheat " class="list-group-item list-group-item-action py-2 ripple text-white rouned">
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
        <a class="navbar-brand" href="dashboaed.php">
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
              class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
            <span class="text-black me-2"><?php  echo $rows['first_name'];  ?> <?php echo $rows['last_name']; ?> </span>
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