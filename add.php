<html>
	<head>
		<title>Students' management</title>
	</head>
	<body>
	<?php include("menu.php");?>
	<h3>Add</h3>
	<form action="action.php?action=add" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td>Sex</td>
				<td>
					<input type="radio" name="sex" value="m" /> Male
					<input type="radio" name="sex" value="w" /> Female
				</td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" /></td>
			</tr>
			<tr>
				<td>Classid</td>
				<td><input type="text" name="classid" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Add" />
					<input type="reset" value="Reset" />
				</td>
			</tr>
		</table>
	</form>
	</body>
</html>