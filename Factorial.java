import java.io.*;

class Factorial 
{
public static void main(String[] args) throws IOException
{
int result = factorial(5);
System.out.print("The factorial of is " + result);
}

static int factorial(int n) 
{

if (n == 0) 
return 1;
else          
return n * factorial(n - 1);
       
}
}