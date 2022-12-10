<?php 

include "nav.php";


require_once 'model/model.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: displayProduct.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Job</title>

</head>
<body>
<form method="POST">
<a style="width: 15%;">
<h2>DELETE Job</h2>

  Name : <?php echo $product['Name'] ?><br>

  Buying Price : <?php echo $product['Buying Price'] ?><br>

  Selling Price : <?php echo $product['Selling Price'] ?><br>

  Displayable :<?php echo $product['Display'] ?><br>

  
  <a href="Controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>

 
</form>
</body>
</html>