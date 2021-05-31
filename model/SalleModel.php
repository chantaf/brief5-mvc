<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class SalleModel{

        // select
        function getAll(){
            
            $query ="SELECT * FROM `salle` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
  
        function getone($id){

            $query ="SELECT * FROM `salle` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }



        //delete
        function Delete($id){

            $query= "DELETE FROM `salle` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }

        //update
        function update($id ,$sCapacite,$sLibelle){

            $query = "UPDATE `salle` SET `libelle`='$sLibelle' ,`capacite`= '$sCapacite' WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        //insert
        function insert($sCapacite,$sLibelle){

            $query= "INSERT INTO `salle`(`libelle`, `capacite`) VALUES ('$sLibelle','$sCapacite')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }
