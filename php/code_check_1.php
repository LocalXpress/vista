<?php
session_start();
$id=$_SESSION['id'];
try {
    $db = new PDO("mysql:dbname=code_compile;host=localhost", "root", "" );
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
	
	$sql="select * from student_record where id='$id'";
		foreach($db->query($sql) as $row)
		{$extention=$row['extention'];
		$name_1=$row['name_1'];
		$name_2=$row['name_2'];
		$attempt=$row['attempt'];}
		
		if($attempt>6)
		{
			header("Location:bye_bye.php");exit;
		}
		
	if($extention=='c')
	{
		$tempfile = $name_1.$name_2.$id.'.c';
		$exefile = $name_1.$name_2.$id.'.exe';

 
 $code="#include".'"stdio.h"'.PHP_EOL.$_REQUEST["c_code"]."int main(){printf(".'"%d"'.",add(4,5));return 0;}";//problems with left shift operator
	
	
	file_put_contents($tempfile, $code);
	$output = shell_exec('gcc '.escapeshellarg($tempfile).' -o ../Codes/'.escapeshellarg($exefile)." 2>&1");
	$output = shell_exec(escapeshellarg('../Codes/'.$exefile)." 2>&1");
	
	if($output=='9')
		echo "Well Done";
	else
		echo "Not Done";
	
	
	unlink($tempfile);
	}
	else if($extention=='cpp')
	{
		$tempfile = $name_1.$name_2.$id.'.cpp';
		$exefile = $name_1.$name_2.$id.'.exe';


 $code="#include".'"iostream"'.PHP_EOL." #include".'"stdio.h"'.PHP_EOL."using namespace std;".$_REQUEST["c_code"]."int main(){printf(".'"%d"'.",add(4,5));return 0;}";
	file_put_contents($tempfile, $code);
	$output = shell_exec('g++ '.escapeshellarg($tempfile).' -o ../Codes/'.escapeshellarg($exefile)." 2>&1");
	$output = shell_exec(escapeshellarg('../Codes/'.$exefile)." 2>&1");
	if($output=='9')
		echo "Well Done";
	else
		echo "Not Done";
	unlink($tempfile);
	}
	else
	{
		
	$file = $name_1.$name_2.$id;
	$JAVA_HOME = "\jre1.8.0_45";
	$PATH = "$JAVA_HOME/bin:".getenv('PATH');
	putenv("JAVA_HOME=$JAVA_HOME");
	putenv("PATH=$PATH");
	$code="class ".$file." {".$_REQUEST["c_code"]."public static void main(String[] args)throws Exception{System.out.println(add(5,4));}}";
	
	file_put_contents($file.'.java', $code);
	$com_1='javac -d F:\PHP_Projects\vista\Codes '.$file.'.java';
	$com_2='java -classpath F:\PHP_Projects\vista\Codes '.$file;
	$output=shell_exec($com_1." 2>&1");
	$output = shell_exec($com_2." 2>&1");
	if($output=='9')
		echo "Well Done";
	else
		echo "Not Done";
	unlink($file.".java");
	}
	
?>