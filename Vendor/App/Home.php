<?php

namespace App;

use App\Welcome;
use App\DB\Query;

//defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Query{

	public function index()
	{
		$welc = new Welcome();
		$welc->show();
		
		$this->connect();

		echo realpath(dirname(__FILE__));
		echo "<br/>";
	}

	public function show($id = null , $year = null , $quarter = null , $type = null , $status = null )
	{
		echo "<br/>";
		echo "id:{$id}<br/>";
		echo "year:{$year}<br/>";
		echo "quarter:{$quarter}<br/>";
		echo "type:{$type}<br/>";
		echo "status:{$status}<br/>";
		//include ("application/views/index.php");

		echo $_SERVER['REQUEST_METHOD'];

		if( !empty( $_POST ) ) 
		{
			echo "<pre>";

			print_r( $_POST );
		}
		print_r( $_REQUEST );
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
