# vista
#Remember to put JRE version in the xamp folder and then set the path using the following commands.
# $JAVA_HOME = "\jre1.8.0_45";
	$PATH = "$JAVA_HOME/bin:".getenv('PATH');
	putenv("JAVA_HOME=$JAVA_HOME");
	putenv("PATH=$PATH");
# correct the director of the server