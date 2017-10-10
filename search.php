<table border="2">
	<tr>
		<th style="color:blue; border:2px solid black;">Product ID</th>
		<th style="color:blue; border:2px solid black;">Product Name</th>
		<th style="color:blue; border:2px solid black;">Quantity In Stock</th>
	</tr>

	<?php include 'connection.php';

$search = $_POST['search'];

if($search)
{
	$sql = "SELECT * FROM products WHERE productName ='$search'";
	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($result))
	{
		echo "The details on the searched product are:";
		echo "<br/>";
		echo "<tr>";
		echo  "<td>";
		echo $row['productId'];
		echo  "</td>";
		echo  "<td>";
		echo $row['productName'];
		echo  "</td>";
		echo  "<td>";
		echo $row['quantityInStock'];
		echo  "</td>";
		echo  "</tr>";
		echo "<br/>";
		echo "<br/>";
	echo "<a href='homepage.php'>Go back to home page.</a>";
	echo "<br/>";
 	echo "<br/>";
	}
}
else
{
	echo "No search results found.";
}

?>
</table>