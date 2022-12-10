

<?php  

if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $products = showAllproducts();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Job</title>
</head>
<body>
<style>
table,td,th{
border:1px solid black;
    }
</style>
<a style="width:15%;">
<h2>Display:</h2>
<table>
<thead>

<th>Name</th>
<th>Profit</th>
<th>Edit</th>
<th>Delete</th>



</thead>
<body>
<?php 
foreach ($products as $i => $product): 
if ($product['Display'] == "YES" || isset($_POST['name'])):
?>
<tr>

<td><?php echo $product['Name'] ?></td>
<td><?php echo $product['Selling Price'] - $product['Buying Price'] ?></td>
<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a></td>
<td><a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
</tr>
 <?php endif; endforeach; ?>
 

 
</body>
</table><ul>
        <li><a href="addProduct.php"> Add Jobs</a></li>
        
 
</body>

</body>
