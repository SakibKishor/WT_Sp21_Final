<?php
	require_once 'models/db_config.php';
	
	function insertCategory($name)
	{
		$query= "insert into categories values (NULL, '$name')";
		execute($query);
	}
	function getCategory($id)
	{
		$query= "select * from categories where id= $id";
		$result= get($query);
		if(count($result)>0)
		{
			return $result[0];
		}
		return false;
		
	}
	
	function getAllCategories()
	{
		$query= "select * from categories";
		$result= get($query);
		return $result;
	}

?>