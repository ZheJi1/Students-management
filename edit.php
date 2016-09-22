<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Students' management</title>
</head>
<body>
	<?php include("menu.php");
	//1.Connect to database
	try{
		$pdo = new PDO("mysql:host= ;dbname= ;"," "," ");
	}catch(PDOException $e){
		die("Fail to connect".$e->getMessage());
	}
	//2.Select
	$sql = "select * from stu where id=".$_GET['id'];
	$stmt = $pdo->query($sql);
	if($stmt->rowCount() > 0){
		$stu = $stmt->fetch(PDO::FETCH_ASSOC);
	}else{
		die("No data changed");
	}

	?>
	<h3>Revise</h3>
	<form action="action.php?action=edit" method="post">
		<input type="hidden" name="id" value="<?php echo $stu['id'];?>" />
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $stu['name']?>"/></td>
			</tr>
			<tr>
				<td>Sex</td>
				<td>
					<input type="radio" name="sex" value="m"  <?php echo ($stu['sex'] == "m") ? "checked" : ""?>/> Male
					<input type="radio" name="sex" value="w" <?php echo ($stu['sex'] == "w") ? "checked" : ""?>/> Female
				</td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $stu['age']?>"/></td>
			</tr>
			<tr>
				<td>Classid</td>
				<td><input type="text" name="classid" value="<?php echo $stu['classid']?>"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Revise" />
					<input type="reset" value="Reset" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
