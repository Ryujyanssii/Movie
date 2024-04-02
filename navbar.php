<!-- nabbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary navcolor sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand"  href="#"><img style="height: 40px; width:70px;" src="qfx.png" alt=""></a>
      <a class="navbar-brand me-auto"  href="index.php"><i class="bi bi-house moviesicon"></i> Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-2" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Latest Movies</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu navcolor">
              <li><a class="dropdown-item" href="#">Complain</a></li>
              <li><a class="dropdown-item" href="#">About US</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="user/logout.php">Logout</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <!-- <form class="d-flex" role="search"> -->
            <!-- <ul>
                <li> -->
                    <!-- <a href=""><button>Log-In</button></a> -->
 <!-- Button trigger modal -->


 <!-- <li> -->
  <?php if(isset($_SESSION['email'])){ ?>
  <h5><i class="bi bi-user"></i><?php echo $_SESSION['fname']; ?> </h5>
  <?php } else { ?>
    <div class="loginbutton">
<button type="button" class="btn btn-primary  butn" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-person-circle"></i> Log-in
  </button>
  </div>
  <?php } ?>
<!-- </li> -->
<!-- </form> -->
</div>
</div>
</nav>



<!-- <?php include "user/message.php"?> -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content model-con">
        <div class="modal-header">
          <h1 class="modal-title fs-5 white" id="exampleModalLabel">SIGN IN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="user/login.php" method="POST">
          <div>
            <input class="inp" name="email" type="text" placeholder="Email" required>
          </div>
          <div>
            <input class="inp" name="pass" type="password" placeholder="Password" required>
          </div>
          <button type="submit"  class="btn btn-primary butn">Sign-In</button>
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="submit"  class="btn btn-primary butn">Sign-In</button> -->
          <button type="button" class="btn btn-primary butn">FORGOT PASSWORD ?</button>
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-primary butn" data-bs-toggle="modal" data-bs-target="#example1Modal">
               SIGN UP
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>


  
<!-- Modal -->
<div class="modal fade " id="example1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content model-con">
      <div class="modal-header">
        <h1 class="modal-title fs-5 white" id="exampleModalLabel">SIGN UP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="user/signup.php" method="POST">
        <label class="white"  for="">Mobile Number</label>
        <div>
          <input class="inp" name="mobile-no" type="number" placeholder="+977(nepal)" required>
        </div>
        <label class="white" for="">Email</label>
        <div>
          <input class="inp" name="email" type="email" placeholder="abc@gmail.com" required>
        </div >
        <label class="white"  for="">Date Of Birth</label>
        <div>
          <input class="white" style="background-color: transparent; border: none;border-bottom: 1px solid aliceblue; margin-bottom: 1vh;" type="date" name="dob" required>
        </div>
       
        <div class="row model">
          <div class="col-4 white" >First Name</div>
          <div class="col-4 white">Middle Name</div>
          <div class="col-4 white" >Last Name</div>
        </div>
        <div class="row model" style="margin-bottom: 1vh;">
          <div class="col-4" ><input type="text" placeholder="First" name="first-name" required></div>
          <div class="col-4" ><input type="text" placeholder="MIddle" name="middle-name"></div>
          <div class="col-4" ><input type="text" placeholder="Last" name="last-name" required></div>
        </div>
        <div>
          <label class="white" for="">Password</label>
          <input  class="inp" type="password" name="pass" placeholder="Enter your password" required>
        </div>
        <div>
          <label class="white" for="">Confirm Password</label>
          <input  class="inp" type="password" name="cpass" placeholder="Enter your password" required>
        </div>
        <div>
          <span><input type="checkbox" required></span><label class="white" for=""> I agree to all <span class="yellow">Terms & Conditions</span></label>
        </div>

      </div>
        <button type="submit" name="submit" class="btn btn-secondary butn" >confirm</button>
      
  </form>
    </div>
  </div>
</div>