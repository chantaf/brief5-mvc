<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";


    class MatiereModel{

        // select
        function getAll(){

            $query ="SELECT * FROM `matiere` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getone($id){

            $query ="SELECT * FROM `matiere` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }


        //delete
        function Delete($id){

            $query= "DELETE FROM `matiere` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);

        }

        //update
        function update($id ,$Libelle){

            $query = "UPDATE `matiere` SET libelle='$Libelle'  WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);

        }

        //insert
        function insert($Libelle){

            $query= "INSERT INTO `matiere`(libelle) VALUES ('$Libelle')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }