<?php 
	$tempfile = tempnam('', 'source');
	//$ques_no=$_GET["ques"];//variable to get the question number
	$file=$_REQUEST["name_code"];//the name of the file will name_1+name_2+unique_id
	//echo $file;
	//c++ Part
	/*
	$tempfile = $file.'.cpp';
	$exefile = $file.'.exe';

 //String code made for C++ 
 $code="#include".'"iostream"'.PHP_EOL." #include".'"stdio.h"'.PHP_EOL."using namespace std;".$_REQUEST["c_code"]."int main(){printf(".'"%d"'.",add(4,5));return 0;}";//problems with left shift operator
	//echo $code;
	
	file_put_contents($tempfile, $code);
	$output = shell_exec('g++ '.escapeshellarg($tempfile).' -o Codes/'.escapeshellarg($exefile));
	$output = shell_exec(escapeshellarg('Codes/'.$exefile));
  
	echo '<pre>'.htmlspecialchars($output,ENT_QUOTES).'</pre>';//This part is left for the comparison.
	unlink($tempfile);
	*/
	//C part
	/*
	$tempfile = $file.'.c';
	$exefile = $file.'.exe';

 //String code made for C
 $code="#include".'"stdio.h"'.PHP_EOL.$_REQUEST["c_code"]."int main(){printf(".'"%d"'.",add(4,5));return 0;}";//problems with left shift operator
	//echo $code;
	
	file_put_contents($tempfile, $code);
	$output = shell_exec('gcc '.escapeshellarg($tempfile).' -o Codes/'.escapeshellarg($exefile));
	$output = shell_exec(escapeshellarg('Codes/'.$exefile));
  
	echo '<pre>'.htmlspecialchars($output,ENT_QUOTES).'</pre>';//This part is left for the comparison.
	unlink($tempfile);
	*/
 //String code made for C
	$JAVA_HOME = "\jre1.8.0_45";
	$PATH = "$JAVA_HOME/bin:".getenv('PATH');
	putenv("JAVA_HOME=$JAVA_HOME");
	putenv("PATH=$PATH");
$code="class ".$file." {".$_REQUEST["c_code"]."public static void main(String[] args)throws Exception{System.out.println(add(5,4));}}";
//echo $code;
	
	file_put_contents($file.'.java', $code);
	
	$com_1='javac -d F:\PHP_Projects\vista\Codes '.$file.'.java';
	$com_2='java -classpath F:\PHP_Projects\vista\Codes '.$file;
	//echo "<br>".$com_1."<br>".$com_2."<br>";
	$output=shell_exec($com_1." 2>&1");
	//echo $output."<br>";
	//$output = shell_exec(escapeshellarg($com_2));
	//echo realpath('Hello.java');
	$output = shell_exec($com_2." 2>&1");
	//$output=shell_exec(escapeshellarg('java Hello'));
  
	echo '<pre>'.htmlspecialchars($output,ENT_QUOTES).'</pre>';//This part is left for the comparison.
	//unlink($tempfile);
	
?>