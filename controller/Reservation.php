<?php

require_once "./model/ReservationModel.php";
session_start();
class Reservation
{
	
	
	function index()
	{
	
	     if(!empty($_SESSION['email']) && ($_SESSION['role']=="enseignant")){
		$Nobjet=new ReservationModel();
        $groupes=$Nobjet->selectgroupe();
		$salles=$Nobjet->selectsalle();
		$reservation=$Nobjet->select();

		
        require_once __DIR__."/../view/reservation/index.php";
		
       }else{
	 header("location: http://localhost/brief5-nv/mvc/");
   }
		
	}


	

	function create()
	{
		if(isset($_POST['ajouter'])){

		
			$reservation=new ReservationModel();
			$rep=$reservation->insert($_POST['date'],$_POST['duree'], $_SESSION["email"],$_POST['groupe'],$_POST['salle']);
			

			if($rep==-3){
				echo( "<script> alert(' cours deja reserver ')</script>");
				$this->index();
				require_once __DIR__."/../view/reservation/index.php";
			}
			
			if($rep==-1){
				echo( "<script> alert(' cours deja reserver ')</script>");
				$this->index();
				require_once __DIR__."/../view/reservation/index.php";
			}

			if($rep==0){
				
				echo( "<script> alert('effectif groupe superieur a la capacite de la salle ')</script>");
				$this->index();
				require_once __DIR__."/../view/reservation/index.php";
			}

			if($rep==1){
				
				echo( "<script> alert('reservation avec success')</script>");
				$this->index();
			}
			
		}
		
	}


	function delete()
	{
		if(isset($_POST['supprimer'])){

			$salle=new ReservationModel();
			$salle->Delete($_POST['id']);
			header("location:http://localhost/brief5-nv/mvc/reservation/");

		}
	}

}
	

