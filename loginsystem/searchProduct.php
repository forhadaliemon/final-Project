<?php 
        include "nav.php";

     ?>
<!DOCTYPE html>
<html>
<head>
<title>Search Job</title>
</head>
<body>
<a style="width: 20%;">
<h2>SEARCH</h2>
<form method="post">
<input type="text" name="name" placeholder="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required> <br><br>
<input type="submit" name="search" value="Search By Name">
</form>

<?php
require 'Controller/search.php';
?>
</body>
</html>