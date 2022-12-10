<!DOCTYPE html>
<html>
<head>
<title>Add Job</title>
<?php 
        include "nav.php";

     ?>

</head>
<body>
<form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data">
 <a  style="width: 15%;" >
  <h1>ADD Job</h1>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>



  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

 
  
  <input type="submit" name = "saveProduct" value="Save">


</form>
</body>
</html>