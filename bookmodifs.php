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
    <title>books modifications</title>

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
                <!-- MDB -->
                
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
    margin: 2px;
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
          🏠 dashboard
          </a>
          <a href="profileSettings.php" class="list-group-item list-group-item-action py-2 ripple ">
          👨‍💼 My profile
          </a>
          <a href="bookmodifs.php" class="list-group-item list-group-item-action py-2 ripple ">
          📚 Books modifications </a>
          
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


  <?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-success alert-dismissible fade show">
				<strong>Success!</strong>
					<?php 

						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-mdb-dismiss="alert"></span>

				</div>
			<?php endif ?>


      <?php if (isset($_SESSION['errore'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				<strong>eror!</strong>
					
          <?php 

						echo $_SESSION['errore']; 
						unset($_SESSION['errore']);
					?>
					<button type="button" class="btn-close" data-mdb-dismiss="alert"></span>

				</div>
			  <?php endif ?>

        <?php if (isset($_SESSION['message2'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				<strong>eror!</strong>
					
          <?php 

						echo $_SESSION['message2']; 
						unset($_SESSION['message2']);
					?>
					<button type="button" class="btn-close" data-mdb-dismiss="alert"></span>

				</div>
			  <?php endif ?>

       

    <ol class="breadcrumb pt-3 ps-3 h5">

      <li class="breadcrumb-item active" >books modifications</li>
    </ol>
    <div class="d-grid p-4 ">
      <button type="button" class=" btn btn-info rounded-pill border-warning" data-mdb-toggle="modal" data-mdb-target="#modalform"><i class="fa fa-plus"></i> Add books</button>
    </div>
  
  <h3 class=" pt-3 ps-3">books table:</h3>
          


        <!-- Modal -->

<div  class="modal fade"  id="modalform"  aria-labelledby="modalform">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header bg-info text-white ">
      <h1 class="modal-title fs-5" > 📚 Add new BooK </h1>
      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body ">
      <form id="form" action="server.php" method="post">

      <input type="hidden" name="adminId" id="adminId" >

      <div  class="mb-3">
          <label  class="col-form-label"> 📔 Title:</label>
          <input type="texte" name="title" class="form-control" id="title">
        </div>

        <div  class="mb-3">
          <label  class="col-form-label">👨 writer:</label>
          <input type="texte"  name="writer" class="form-control" id="writer">
        </div>

        
        <div  class="mb-3">
        <label for="tentacles" class="col-form-label">quantity:</label>
        <input type="number" name="quantity"  class="form-control" id="quantity" min="10" max="100">
        </div>

          <div>
            <label for="date"> 📅 date:</label>
            <input class="form-control" type="date" id="date" name="date">
          
        </div>

        <div  class="mb-3">
          <label  class="col-form-label">  type:</label>
          <input type="texte"  name="type"  class="form-control" id="type">
        </div>

        <div  class="mb-3">
          <label  class="col-form-label">💵 price:</label>
          <input type="number"  name="price"  class="form-control" id="price">
        </div>


        <div class="mb-3">
          <label for="Description" class="col-form-label">💡 About:</label>
          <textarea class="form-control"  name="about"   id="about"></textarea>
        </div>

        </div>

        <div class="modal-footer bg-info">
          <a href="#" class="btn btn-white" data-mdb-dismiss="modal">Cancel</a>
          <button type="submit" name="save_book" class="btn btn-primary task-action-btn" id="task-save-btn" >Save</button>
          <button type="button" class=" m-2 btn  btn-l btn-info btn-rounded"><a class="text-decoration-none text-light " href="bookmodifs.php? update='<?php echo $rows['id'] ?>'">update</a></button>
        </div>
      </form>
    </div>
  </div>
  </div>
           <!---end of modal-->

        
 

  <section>
    <table class="table align-middle mb-0 bg-white">
      <thead class="tiblehead">
        <tr  >

          <th>book </th>
          <th>writer</th>
          <th>type</th>
          <th>date</th>
          <th>about</th> 
          <th>quantity</th>
          <th>price</th>
          <th>Actions</th>
          
        </tr>
      </thead>
      <?php getbooks(); ?>
     
      
    </table>
  </section>


 
  </main>
  <!--Main layout-->

      
  
                <script
                type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
                ></script>
  
</body>
</html>