<?php 
include "connection.php";
include "session.php";
include "navbar.php";
include "sidebar.php";

$sql ="SELECT * FROM `movies`";
$result= mysqli_query($conn,$sql);
$data= mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 ">
        <nav class="alert alert-primary" style="background-color: #dle7dd;">
       <div class="row">
        <div class="col-6">
            
        <h4>List of movies</h4>
</div>
<div class="col-6 d-flex flex-row-reverse">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">List of Movies</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="insertmovie.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputmovie" class="form-label">Movie Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputmovie" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputdetails" class="form-label">Details</label>
    <textarea name="detail"  class="form-control" id="exampleInputdetails"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Image</label>
    <input type="file" name="image"  class="form-control" id="exampleInputimage">
  </div>

      </div>
      <div class="modal-footer">       
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
      </div>
</form>
    </div>
  </div>
</div>
</div>
</div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Movies Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;

    foreach($data as $key =>$value)
    {

    
    ?>
  <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $value['name']; ?></td>
      <td>
        <textarea rows="" cols="">
          <?php echo $value['detail']; ?>
        </textarea>
     </td>
      <td><img src="images/<?php echo $value['image'];  ?>" height="100" alt=""></td>
      <td><?php echo $value['status']; ?></td>
      <td><?php echo $value['date']; ?></td>
    <td><?php echo $value['status']; ?></td>
      <td>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $value['id']; ?>">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Records</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
  <div class="mb-3">
    <label for="exampleInputmovie" class="form-label">Movie Name</label>
    <input type="text" name="name" value="<?php echo $value['name']; ?>" class="form-control" id="exampleInputmovie" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputdetails" class="form-label">Details</label>
    <textarea name="detail"  class="form-control" id="exampleInputdetails"><?php echo $value['detail'];?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputimage" class="form-label">Image</label>
    <input type="file" name="image/" value="<?php echo $value['image'] ?>" class="form-control" id="exampleInputimage">
  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submitmovie">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
        <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</main>
    <?php 
    include "message.php";
include "footer.php";

?>
