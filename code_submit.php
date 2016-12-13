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
	
	$tempfile = $file.'.c';
	$exefile = $file.'.exe';

 //String code made for C++ 
 $code="#include".'"stdio.h"'.PHP_EOL.$_REQUEST["c_code"]."int main(){printf(".'"%d"'.",add(4,5));return 0;}";//problems with left shift operator
	//echo $code;
	
	file_put_contents($tempfile, $code);
	$output = shell_exec('gcc '.escapeshellarg($tempfile).' -o Codes/'.escapeshellarg($exefile));
	$output = shell_exec(escapeshellarg('Codes/'.$exefile));
  
	echo '<pre>'.htmlspecialchars($output,ENT_QUOTES).'</pre>';//This part is left for the comparison.
	unlink($tempfile);
?>