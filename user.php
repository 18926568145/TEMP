class A
{
	function __construct()
	{
		echo "Master Brach";
	}
}

class B extends A
{
	function printName()
	{
		echo "hello";
	}
}