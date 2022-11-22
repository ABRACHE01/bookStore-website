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
  <main   class="mt-5">


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

       

       

    <ol class="breadcrumb pt-3 ps-3 h5">

      <li class="breadcrumb-item active" >books modifications</li>
    </ol>
    <div class="d-grid p-4 ">
      <button type="button" class=" btn btn-info rounded-pill border-warning " onclick=" hidebuttonupdate(); clear_form();" data-mdb-toggle="modal" data-mdb-target="#modalform"><i class="fa fa-plus"></i> Add books</button>
    </div>
  
  <h3 class=" pt-3 ps-3">books table:</h3>
          


        <!-- Modal -->
     
<div  class="modal fade "  id="modalform"  aria-labelledby="modalform">
  <div class="modal-dialog">
    <div class="modal-content"> 
    <div class="modal-header bg-info text-white ">
      <h1 class="modal-title fs-5" id="ModaleTitle" > 📚 Add new BooK </h1>
      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body ">

      <form id="form" action="server.php" method="post">

      <input type="hidden" name="bookId" id="bookId" >

      

      <div  class="mb-3">
          <label  class="col-form-label"> 📔 Title:</label>
          <input type="texte" name="title" class="form-control" id="title">
        </div>

        <div  class="mb-3">
          <label  class="col-form-label">👨 writer:</label>
          <input type="texte"  name="writer" class="form-control" id="writer">
        </div>

        
        <div  class="mb-3">
        <label for="quantity" class="col-form-label">quantity:</label>
        <input type="number" name="quantity"   class="form-control" id="quantity" min="0" max="100">
        </div>

          <div>
            <label for="date"> 📅 date:</label>
            <input class="form-control" type="date" id="date" name="date">
          
        </div>

        <div  class="mb-3">
          <label  class="col-form-label"> type: </label>
          <input type="texte"  name="type"  class="form-control" id="type">
        </div>

        <div  class="mb-3">
          <label  class="col-form-label"> 💵 price: </label>
          <input type="number"  name="price"  class="form-control" id="price">
        </div>


        <div class="mb-3">
          <label for="about" class="col-form-label"> 💡 About: </label>
          <textarea class="form-control"  name="about"   id="about"></textarea>
        </div>

        </div>

        <div class=" modal-footer bg-info" id="modal-footer">

          <a href="#" class="btn btn-white" data-mdb-dismiss="modal">Cancel</a>
          <button type="submit" name="save_book" class="btn btn-primary task-action-btn" id="save-btn" >Save</button>
          <button type="submit" name="update" class="btn btn-warning task-action-btn" id="update-btn">Update</button>

        </div>
      </form>
    </div>
  </div>
  </div>
           <!---end of modal-->

        
 

  <section class="table-responsive">
    <table class="table align-middle mb-0 bg-white   ">
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
      <tbody>

      <?php getbooks(); ?>

      </tbody>
     
     
      
    </table>
  </section>


 
  </main>
  <!--Main layout-->

      
  <script src="app.js"></script>

  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
  ></script>
  
</body>
</html>