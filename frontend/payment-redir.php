<?php 
include('config/constants.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/eipay.css">
    <link rel="icon" 
      type="image/jpeg" 
      href="images/logo_ntx.jpeg">
    
</head>
<body>

<div class="container">
  <div class="brand-logo"></div>
    <div class="brand-title">Mama Tee Restaurant</div>
  
<?php 
      if(isset($_SESSION['success']))
        {
          echo $_SESSION['success'];
          unset($_SESSION['success']);
         }
         //unset($_SESSION['cart']);

?>
  <form action=" index.php">
    <button>Homepage</button>
  </form>
      </div>
    </div>
  </div>

</body>
</html>
