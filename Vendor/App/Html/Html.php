<?php
namespace App\Html;

//defined('BASEPATH') OR exit('No direct script access allowed');

class Html{

	public function show()
	{
		//include ("application/views/show.php");

		echo $_SERVER['REQUEST_METHOD'];
		 
		if( !empty( $_REQUEST ) ) 
		{
			echo "<pre>";

			print_r( $_REQUEST );
		}
	}
}
