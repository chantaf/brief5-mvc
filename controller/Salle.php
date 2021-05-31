<?php

require_once "./model/SalleModel.php";
class Salle
{
	
	
	function index()
	{
		        session_start();
				if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin")){
					$objet= new SalleModel();
					$result=$objet-> getAll();
					require_once __DIR__.'/../view/salle/index.php';
				}else{
				
					header("location: http://localhost/brief5-nv/mvc/reservation");

				}
	}

	function create()
	{
		if(isset($_POST['ajouter'])){
			$salle=new SalleModel();
			$count= count($_POST['capacite']);
            for ($a = 0; $a <$count; $a++)
            {
                $salle->insert($_POST['capacite'][$a],$_POST['libelle'][$a]);
                header("location:http://localhost/brief5-nv/mvc/salle/");
            }
	}
	}
	

	function update()
	{
		
		if(isset($_POST['submit'])){

			$salle=new SalleModel();
			$sl=$salle->update($_POST['id'] ,$_POST['capacite'],$_POST['libelle']);
			header("location:http://localhost/brief5-nv/mvc/salle/");
			


		}
	}

	function delete()
	{
		if(isset($_POST['supprimer'])){

			$salle=new SalleModel();
			$salle->Delete($_POST['id']);
			header("location:http://localhost/brief5-nv/mvc/salle/");


		}
	}
}
