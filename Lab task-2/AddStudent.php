<?php
	require_once "db_config.php";
	$name="";
	$err_name="";
	$id="";
	$err_id="";
	$credit="";
	$err_credit="";
	$cgpa="";
	$err_cgpa="";
	$deptId="";
	$err_deptId="";
	
	$hasError=false;
	
	if ($_SERVER["REQUEST_METHOD"]== "POST")
	{
		if (empty($_POST["name"]))
		{
			$err_name="*Name Required";
			$hasError=true;
		}
		else if(strlen($_POST["name"])<2 )
		{
			$err_name="*Name should be more than one characters";
			$hasError=true;
		}
		else
		{
			$name=htmlspecialchars( $_POST["name"]);
		}
	
	
	
		if(!ctype_digit($_POST["id"]))
		{
			$err_number="*ID should be all numbers";
			$hasError=true;
		}
		else
		{
			$number=htmlspecialchars($_POST["id"]);
		}
		
		if(!ctype_digit($_POST["credit"]))
		{
			$err_number="*Credit should be in numbers";
			$hasError=true;
		}
		else
		{
			$number=htmlspecialchars($_POST["credit"]);
		}
		
		if(!ctype_digit($_POST["cgpa"]))
		{
			$err_number="*CGPA should be all numbers";
			$hasError=true;
		}
		else
		{
			$number=htmlspecialchars($_POST["cgpa"]);
		}
		
		
		$query="insert into user values(NULL,'$name',NULL,'credit','cgpa','deptId')";
		$result= execute($query);
		
	}

	
?>
	
<html>
	<head></head>
	<body>
		<fieldset>
		<legend align= "center"><h1 >Add student</h1></legend>
		<form action="" method= "post">
			<table align= "center">
				<tr>
					<td> <span>Name</span> </td>
					<td> :<input type = "text" value="<?php echo $name;?>"  name= "name"> 
					<span> <?php echo $err_name; ?> </span> </td>
				</tr>
				
				<tr>
					<td> <span>ID</span> </td>
					<td> :<input type = "text" value="<?php echo $id; ?>" name= "id"> 
					<span> <?php echo $err_id; ?> </span> </td>
				</tr>
				
				
				<tr>
					<td> <span>Birth Date</span> </td>
					<td> 
						<select>
							<option>Day</option>
							<?php
								for($i=1;$i<=31;$i++)
									echo "<option> $i </option>";
							?>
						</select>
						
						<select>
							<option>Month</option>
							<?php
								$month= array("January","February","March","April","May","June","July","August","September","October","November","December");
								foreach ($month as $m)
								{
									echo "<option> $m </option>";
								}
							?>
						</select>
						
						<select>
							<option>Year</option>
							<?php
								for($i=1980;$i<=2010;$i++)
									echo "<option> $i </option>";
							?>
						</select>
						
					
				</tr>
				
				
				<tr>
					<td> <span>Credit</span> </td>
					<td> :<input  type = "text"    value="<?php echo $credit ?>"   name= "credit"     >
						<span> <?php echo $err_credit; ?> </span> </td> 
						
					
				</tr>
				
				
				<tr>
					<td> <span>Cgpa</span> </td>
					<td> :<input  type = "text"    value="<?php echo $cgpa ?>"   name= "cgpa"     >
						<span> <?php echo $err_cgpa; ?> </span> </td> 
						
					
				</tr>
				
				<tr>
					<td> <span>Department Id</span> </td>
					<td> :<input  type = "text"    value="<?php echo $deptId ?>"   name= "deptId"     >
						<span> <?php echo $err_deptId; ?> </span> </td> 
						
					
				</tr>
				
				<tr>
					<td align= "center" colspan= "2"> <input type="submit" value="Add new student"> </td>
				</tr>
				
				
			</table>
		</form>
	</fieldset>
	</body>
</html>
	

