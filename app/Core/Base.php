<?php

namespace App\Core;

class Base {

	public function config($param)
	{
		$param = explode($param, '.');
		return ;
	}

	public function assets($param)
	{

	}

	public function setUrl()
	{
		$this->url = '';
	}


}