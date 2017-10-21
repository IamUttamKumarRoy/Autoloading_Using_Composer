<?php

namespace DB;

//defined('BASEPATH') OR exit('No direct script access allowed');

class Query{

	public function connect()
	{
		echo realpath(dirname(__FILE__));
		echo "<br/>";
	}

	public function show($id = null , $year = null )
	{
		echo "id:{$id}<br/>";
		echo "year:{$year}<br/>";		
	}

	public function form_submit()
	{
		//include ("application/views/form_submit.php");

		echo $_SERVER['REQUEST_METHOD'];

		if( !empty( $_POST ) ) 
		{
			echo "<pre>";

			print_r( $_POST );
		}
	}
}
