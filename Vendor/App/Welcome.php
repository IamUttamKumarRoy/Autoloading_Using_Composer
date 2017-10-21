<?php
namespace App;

//defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome{

	public function show()
	{
		echo "Home->index();<br/>";
		echo realpath(dirname(__FILE__));
		echo "<br/>";
	}
}
