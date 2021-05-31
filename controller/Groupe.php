<?php

require_once "./model/GroupeModel.php";
class Groupe
{

    function index()
    {
        session_start();
        if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin")){
            $objet= new GroupeModel();
            $result=$objet-> getAll();
            require_once __DIR__.'/../view/groupe/index.php';
        }else{
            header("location: http://localhost/brief5-nv/mvc/reservation");
        }
    }

    function create()
    {
        if(isset($_POST['ajouter'])){

            $salle=new GroupeModel();
            $salle->insert($_POST['libellee'],$_POST['effectif']);
            header("location:http://localhost/brief5-nv/mvc/groupe/");

        }
    }


    function update()
    {

        if(isset($_POST['submit'])){

            $salle=new GroupeModel();
            $sl=$salle->update($_POST['id'] ,$_POST['libellee'],$_POST['effectif']);
            header("location:http://localhost/brief5-nv/mvc/groupe/");



        }
    }

    function delete()
    {
        if(isset($_POST['supprimer'])){

            $salle=new GroupeModel();
            $salle->Delete($_POST['id']);
            header("location:http://localhost/brief5-nv/mvc/groupe/");


        }
    }
}