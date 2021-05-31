<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";


    class GroupeModel{

        // select
        function getAll(){

            $query ="SELECT * FROM `group` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        function getone($id){

            $query ="SELECT * FROM `group` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        }


        //delete
        function Delete($id){

            $query= "DELETE FROM `group` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);

        }

        //update
        function update($id ,$Libelle,$effectif){

            $query = "UPDATE `group` SET libellee='$Libelle', effectif='$effectif'  WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);

        }

        //insert
        function insert($Libelle,$effectif){

            $query= "INSERT INTO `group`(libellee,effectif) VALUES ('$Libelle','$effectif')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }