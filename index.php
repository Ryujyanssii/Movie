<?php
session_start();
include("header.php");
include("navbar.php");
include "connection.php";
$sql="SELECT * FROM `movies`";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

  <body>




  <!-- slider -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://www.qfxcinemas.com/now-showing-booking/132/2/All/-">
          <img src="shahid.png" class="d-block w-100" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="https://www.qfxcinemas.com/now-showing-booking/135/116/All/-">
          <img src="dayarani.png" class="d-block w-100" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="https://www.qfxcinemas.com/now-showing-booking/125/116/All/-">
          <img src="hattichhap.png" class="d-block w-100" alt="...">
        </a>
      </div>
    </div>
  </div>

 <hr style="border: 3px solid; margin-top:0px;">

  <!-- grid -->
  <div class="container-fluid">

    <div class="grid">
      <span><h1>NOW SHOWING</h1></span>
      <div class="row">
      <?php foreach($data as $key => $value){ ?>
    
  
  
      <div class="col-6 col-md-4 col-lg-2 card-down">
        <a href="detail.php?id=<?php echo $value['id']; ?>">
       <img src="backend/images/<?php echo $value['image']; ?>" class="card-img-top img-thumbnail "> </a>
      </div>
     
   
    <?php }?>
     </div>
  
    <hr style="border: 3px solid;">

    <div class="grid">
      <span><h1>COMING SOON....</h1></span>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-2  col-6  card-down"><img src="shahid.webp" class="img-thumbnail" alt="..."></div>
      <div class="col-md-4 col-lg-2  col-6  card-down"><img src="Hattichhap-l.webp" class="img-thumbnail" alt="..."></div>
      <div class="col-md-4 col-lg-2  col-6  card-down"><img src="Dayarani-l.webp" class="img-thumbnail" alt="..."></div>
      <div class="col-md-4 col-lg-2  col-6  card-down"><img src="shahid.webp" class="img-thumbnail" alt="..."></div>
      <div class="col-md-4 col-lg-2  col-6  card-down"><img src="Hattichhap-l.webp" class="img-thumbnail" alt="..."></div>
      <!-- <div class="col-2"><img src="Dayarani-l.webp" class="img-thumbnail" alt="..."></div> -->
    </div>
  </div>

  
  <?php
include("footer.php");
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>