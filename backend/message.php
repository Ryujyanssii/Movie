<p class="text-center" style="color:red;">
 <?php
 if(isset($_SESSION['message']))
 {
echo $_SESSION['message'];
 }

unset($_SESSION['message']);
 
?>
</p>