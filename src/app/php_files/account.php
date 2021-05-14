<?php include('server.php') ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Account</h2>
  </div>
  <div class="content">
  	 
  
  <label>Username</label>
  <?php if(isset($_SESSION['username'])) : ?>
        
       <?php 
        
           echo $_SESSION['username']; 
           unset($_SESSION['success']);
       ?>
    
    
   <?php endif ?>
    <br>
    <label>Your income:</label>
  <?php if(isset($_SESSION['username'])) : ?>
        
       <?php 
        
        echo '<span style="color:#AFA;text-align:center;"> 524 </span>';
           unset($_SESSION['success']);
       ?>
    
    
   <?php endif ?>
   <br>
    <label>Your overall profits:</label>
  <?php if(isset($_SESSION['username'])) : ?>
        
       <?php 
        
        echo '<span style="color:#AFA;text-align:center;"> 413 </span>';
           unset($_SESSION['success']);
       ?>
    
    
   <?php endif ?>
   <br>
   <label>Your month profit:</label>
  <?php if(isset($_SESSION['username'])) : ?>
        
       <?php 
        
        echo '<span style="color:#f00c3e;text-align:center;"> -320 </span>';
           unset($_SESSION['success']);
       ?>
    
    
   <?php endif ?>
   <br>
   <label>Favourite cryptocurrency: </label>
  <?php if(isset($_SESSION['username'])) : ?>
        
       <?php 
        
        echo '<span style="color:#005cad;text-align:center;"> Doggycoin </span>';
           unset($_SESSION['success']);
       ?>
    
    
   <?php endif ?>
   </div>


   <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

     
    <?php  if (isset($_SESSION['username'])) : ?>
    	 
    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		 
    <?php endif ?>
	 
	
</div>

   
</body>
</html>