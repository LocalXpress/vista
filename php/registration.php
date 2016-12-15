<?php
session_start();

try {
    $db = new PDO("mysql:dbname=code_compile;host=localhost", "root", "" );
    //echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
$team_name=$_POST["team_name"];
$name_1=$_POST["name_1"];
$name_2=$_POST["name_2"];
$name_3=$_POST["name_3"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$extention=$_POST["extention"];
 
	$sql = $db->prepare("INSERT into student_record(team_name,name_1,name_2,name_3,email,phone,extention)VALUES(:team_name,:name_1,:name_2,:name_3,:email,:phone,:extention)");
		$sql->execute(array(
		"team_name"=>$team_name,
		"name_1" => $name_1,
		"name_2" => $name_2,
		"name_3" => $name_3,
		"email"=>$email,
		"phone" => $phone,
		"extention"=>$extention));
		
		$sql="select * from student_record where email='$email'";
		foreach($db->query($sql) as $row)
		{$_SESSION['id']=$row['id'];}
		
		header("location:/vista/page_1.php");
		//echo "The session variable is: ".$_SESSION['id'];
		
?>