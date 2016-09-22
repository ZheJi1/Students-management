<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Students' management</title>
	<script>
		function doDel(id){
			if(confirm("Confirm to delete？")){
				window.location='action.php?action=del&id='+id;
			}
		}
	</script>
</head>
<body>
<?php include("menu.php");?>
<h3>Browse</h3>
<table width="600" border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Sex</th>
		<th>Age</th>
		<th>Classid</th>
		<th>Operate</th>
	</tr>
	<?php
	//1.Connect to database
	try{
		$pdo = new PDO("mysql:host= ; dbname= ;"," "," ");
	}catch(PDOException $e){
		die("Fail to connect".$e->getMessage());
	}
	//2.Select from sql
	$sql = "select * from stu";
	foreach($pdo->query($sql) as $row){
		echo "<tr>";
		echo "<td>{$row['id']}</td>";
		echo "<td>{$row['name']}</td>";
		echo "<td>{$row['sex']}</td>";
		echo "<td>{$row['age']}</td>";
		echo "<td>{$row['classid']}</td>";
		echo "<td>
					<a href='javascript:doDel({$row['id']})'>Delete</a>
					<a href='edit.php?id={$row['id']}'>Revise</a>
				</td>";
		echo "</tr>";
	}
	?>
</table>
</body>
</html>
