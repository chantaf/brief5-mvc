<?php

require_once "./model/LoginModel.php";
class Login{

	function index()
	{
	  
		require_once __DIR__.'/../view/home.php';
	}

	function create(){
		if(isset($_POST['submit'])){

			$sign=new LoginModel();
			$sign->save($_POST['name'],$_POST['email'],$_POST['password'],$_POST['id_matiere']);
			header("location: http://localhost/brief5-nv/mvc/login");
		}
	}


	function authentification(){
		if(isset($_POST['submit'])){

			$sign=new LoginModel();
			$log=$sign->auth($_POST['email'],$_POST['password']);
			$logadmin=$sign->authadmin($_POST['email'],$_POST['password']);

			 if(empty($log) && empty($logadmin))
			{
				header("location: http://localhost/brief5-nv/mvc/");
			}
			else if(!empty($log)){
				
				session_start();
				$_SESSION['email']=$log[0]['id'];
				$_SESSION['role']=$log[0]['role'];
				header("location: http://localhost/brief5-nv/mvc/reservation/");

			}else if(!empty($logadmin))	{
				session_start();
				$_SESSION['email']=$logadmin[0]['id'];
				$_SESSION['role']=$logadmin[0]['role'];
				header("location: http://localhost/brief5-nv/mvc/salle/");
			}
		}
	}


	function Logout()
	{
		if(isset($_POST['logout'])){

			$sign=new LoginModel();
			$sign->logout();
			header("location: http://localhost/brief5-nv/mvc/");
		}
	}

}

