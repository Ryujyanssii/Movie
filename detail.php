<?php
   include("header.php");
   session_start();
   include("navbar.php");
   include "connection.php";
  
   if(isset($_GET['id']))
   {
    $id=$_GET['id'];
    $sqlimage="SELECT * FROM movies WHERE id='$id'";
    $result=mysqli_query($conn,$sqlimage);
    $data=mysqli_fetch_assoc($result);
 
   }
   ?>

 <body>
       

  <div class="container-fluid pt-2 ">
  <div class="row" >
    <div class=" col-md-4 col-lg-3 col-sm-12 col-12 x">

    <div class="row">
      <?php if(!empty($data['image'])) {?>
      <div class="col-6 col-sm-6 col-md-6 ">
      <img src="backend/images/<?php echo $data['image'];?>" class="img-thumbnail" alt="...">
        <h5 class="text-center">NOW SHOWING</h5>
        <?php }?>
      </div>
      <div class="col-6 col-sm-6 col-md-6">
      <h6><?php echo $data['name'];?><span style="opacity: 0.4;">(2024)</span></h6>
      <span>144 mins</span>
      <span>PG
      <div>HIN</div>
      </span>
      </div>
      <div class="row">
        <div class="col-12 ">
        </div>
      </div>


    </div>

        <div id="less" class="text-center">
          <p>In a futuristic world, a bumbling young man....</p>
          <span>
            <button id="show-more" class="btn btn-link">Show More</button>
          </span>
       </div> 
       <div class="text-center" id="more" style="display: none;">
         <p >In a futuristic world, a bumbling young man meets the girl of his dreams. As he navigates his way through a series of comical mishaps and dangerous situations, he must win her heart facing an evil companion.
         <br><br>
          LANGUAGE: <br>
          GENRE: Drama, Romance <br>
          CAST: Shahid Kapoor & Kriti Sanon <br>
          DIRECTOR: Amit Joshi</p>
          <span>
            <button id="show-less" class="btn btn-link">Show less</button>
          </span>
        </div> 
    </div>


    <div class="col-lg-9 col-md-8 col-sm-12 col-12">

      <!-- accordion -->
      <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button  navcolor" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h5>1. Select Date, Language & Time Slots</h5>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body grid">
        <div class="row">
          <div class="col-12"><h6>Select Date</h6></div>
         </div>
        <div class="row d-flex">
          <div class="col-lg-2 col-3 col-xl-1 col-sm-2 col-md-2">                
               <label  for="">Today</label>
           </div>
          <div class="col-lg-2 col-xl-1 col-3 col-sm-2 col-md-2 ">               
               <label for="">Tomorrow</label>
           </div>
      </div>
      
      <div class="row ">
       <div class="col-lg-2 col-xl-1 col-3 col-md-2 col-sm-2 ">
               <button class="btn btn-primary butn">
                  <div>feb</div>
                  <div style="font-weight: bolder; font-size:20px;">19</div>
                  <div>mon</div>
                </button>
         </div>
       <div class="col-lg-2 col-xl-1 col-3 col-md-2 col-sm-2 ">
               <button class="btn btn-primary butn">
                  <div>feb</div>
                  <div style="font-weight: bolder; font-size:20px;">19</div>
                  <div>mon</div>
                </button>
         </div>
        
       <div class="col-6 col-lg-3 col-md-6 col-xl-5  col-sm-8 pt-3 text-center">
        <input type="date" style=" border-radius: 5px;background-color:transparent;border: 2px solid rgba(225, 225, 225, .2);backdrop-filter: blur(20px);box-shadow: 0px 0px 10px rgba(0, 0, 0, .2);">
       </div>
       <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 pt-3">
         <h6>Please Note</h6>
         <p>Tickets will be required for all admissions. Infants will not be admitted.</p>
       </div>
      </div>
      
      <div class="row">
       <div class="col-12">
        <h6>Available Cinema</h6>
       </div>
      </div>
      <div class="row">
       <div class="col-12">
       <button type="button" class="btn btn-primary butn">Bhatbhateni Biratnagar</button>
       </div>
      </div>

      <div class="row">
       <div class="col-12 pt-2">
        <h6>Language</h6>
       </div>
      </div>
      <div class="row ">
       <div class="col-lg-2 col-xl-1 col-3 col-sm-2 col-md-2">
       <button type="button" class="btn btn-primary butn">English</button>
       </div>
       <div class="col-lg-2 col-xl-1 col-3 col-sm-2 col-md-2 ps-4">
       <button type="button" class="btn btn-primary butn">Hindi</button>
       </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-lg-3 col-12 col-md-3 col-sm-12" style="border-right: 1px solid yellow;">
          <h6>BHATBHATENI BIRATNAGAR</h6>
        </div>
        <div class="col-lg-2 col-3 col-md-2 col-sm-2 col-xl-1">
        <button type="button" class="btn btn-outline-secondary">07:00</button>
        </div>
        <div class="col-lg-2 col-3 col-md-2 col-sm-2 col-xl-1">
        <button type="button" class="btn btn-outline-secondary">13:00</button>
        </div>
      </div>



  </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed navcolor" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h5>2. Pick Seats</h5>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body grid">
       

      <?php

      include("seat.php");

      ?>

      </div>
    </div>
  </div>
  
    <div style="background-color:rgb(66, 61, 61)">
    <div class="row p-3">
    <div class="col-10">
  Rs.<span id="price">0</span>
</div>
<div class="col-2">
  <?php if(isset($_SESSION['email'])){?>
  <form action="book.php" method="post">
    <input type="hidden" id="totalprice" value="" name="price">
    <input type="hidden" id="ticket" value="" name="ticket">
    <button type="submit" class="btn btn-success btn-sm" name="book">Book Now</button>
  </form>
  <?php } else {?>
  <span>Login First</span>
<?php } ?>
</div>
      <!-- accordion-end  -->
      <!-- <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed navcolor" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h5>2. Pick Seats</h5>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body grid"></d></d> -->
       
    </div>
   </div>
  </div>
  </div>
    <!-- <button id="img1" data-id="1" data-body="5" id="user"></button> -->
  <?php
   include("footer.php");
  ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $("#show-more").click(function(){
        $("#less").hide();
        $("#more").show();
      });
      $("#show-less").click(function(){
        $("#more").hide();
        $("#less").show();
      });
    });
    </script>
    <script>
      let count=0;
      let ticket=0;
  $(".img1").click(function(e){
    var price=  $(this).attr('data-price');  
    var cost=parseInt(price);  
    var data=  $(this).attr('data-id');
    // alert(price);
    if(data=="b")
    {
      $(this).attr('src','https://d346azgjfhsciq.cloudfront.net/S3/uploads/seatIcons/1684133570541-microsoftteamsimage_6.png');
      $(this).attr('data-id','');
      count=count-cost;
      ticket -=1 ;

    }else{
      $(this).attr('src','https://d346azgjfhsciq.cloudfront.net/S3/uploads/seatIcons/1684133767562-microsoftteamsimage.png');
      $(this).attr('data-id','b');
     count=count+cost;
      ticket +=1 ;
    }
    $("#price").html(count);
    $("#totalprice").attr('value',count);
    $("#ticket").attr('value',ticket);
  });
</script>
</body>
</html>