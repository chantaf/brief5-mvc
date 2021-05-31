<?php
require_once "./model/LoginModel.php";

class regester{
	
	function index()
	{
	
		$sign=new LoginModel();
	    $matieres=$sign->remplireselectmatier();
		require_once __DIR__."/../view/regester.php";
		
	
	}
}