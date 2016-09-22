<?php
//1.Connect to database
try{
	$pdo = new PDO("mysql:host= ;dbname= ;"," "," ");
}catch(PDOException $e){
	die("Fail to connect".$e->getMessage());
}

//2.Action

switch($_GET['action']){
	case "add"://add
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$classid = $_POST['classid'];
	
	$sql = "insert into stu values(null,'{$name}','{$sex}','{$age}','{$classid}')";
	$rw = $pdo->exec($sql);
	if($rw > 0){
			echo "<script>alert('Successful');window.location='index.php'</script>";
	}else{
		echo "<script>alert('Fail');window.history.back();</script>";
	}
	break;
	
	case "del"; //delete
	$id = $_GET['id'];
	$sql = "delete from stu where id={$id}";
	$pdo->exec($sql);
	header("Location:index.php");
	break;
	
	case "edit":
	//1.edit
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$classid = $_POST['classid'];
	$id = $_POST['id'];
	
	$sql = "update stu set name='{$name}',sex='{$sex}',age={$age},classid={$classid} where id={$id}"; 
	$rw = $pdo->exec($sql);
	if($rw>0){
			echo "<script>alert('Successful');window.location='index.php'</script>";
	}else{
		echo "<script>alert('Fail');window.history.back();</script>";
	}
	break;
}





