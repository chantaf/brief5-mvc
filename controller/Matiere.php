<?php

require_once "./model/MatiereModel.php";
class Matiere
{

    function index()
    {
        session_start();
        if(!empty($_SESSION['email'])  && ($_SESSION['role']=="admin")){
            $objet= new MatiereModel();
        $result=$objet-> getAll();
        require_once __DIR__.'/../view/matiere/index.php';
        }else{
          
            header("location: http://localhost/brief5-nv/mvc/reservation");
        }
    }

    function create()
    {
        if(isset($_POST['ajouter'])){

            $matiere=new MatiereModel();
            $matiere->insert($_POST['libelle']);
            header("location:http://localhost/brief5-nv/mvc/matiere/");

        }
    }


    function update()
    {

        if(isset($_POST['submit'])){

            $matiere=new MatiereModel();
            $sl=$matiere->update($_POST['id'] ,$_POST['libelle']);
            header("location:http://localhost/brief5-nv/mvc/matiere/");

        }
    }

    function delete()
    {
        if(isset($_POST['supprimer'])){

            $matiere=new MatiereModel();
            $matiere->Delete($_POST['id']);
            header("location:http://localhost/brief5-nv/mvc/matiere/");

        }
    }
}
