<?php
	session_start();
	if(!isset($_SESSION["loggedin"]))
	{
		header("Location:login.php");
	}
	require_once "db_config.php";
	
	$query= "select * from student";
	$result= get($query);

?>

<table border="1" style= "border-collapse:collapse;">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>DOB</th>
		<th>Credit</th>
		<th>CGPA</th>
		<th>Department Id</th>
	</tr>
	
	<?php
		foreach( $result as $row )
		{
			echo "<tr>";
			echo "<td>".$row["S_id"]."</td>";
			echo "<td>".$row["S_name"]."</td>";
			echo "<td>".$row["DOB"]."</td>";
			echo "<td>".$row["Credit"]."</td>";
			echo "<td>".$row["CGPA"]."</td>";
			echo "<td>".$row["Dept_id"]."</td>";
			echo    "<td> 
						<a href='#'> Edit</a> | 
						<a href='#'> Delete </a> 
					</td>";
			echo "</tr>";
		}
	
	
	?>
		
</table>	