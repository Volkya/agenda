<?php 

/**
* 
*/
class xampp extends CI_Controller
{
	
	function __construct()
	{
		# code...
	}

	function sql(){
		shell_exec('c://xampp/mysql_stop.bat');
		shell_exec('c://xampp/mysql_start.bat');
		shell_exec('exit');
		header('location: ../');
	}
}

 ?>