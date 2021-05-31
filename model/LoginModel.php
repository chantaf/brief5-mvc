<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class LoginModel{

        //insert
        function save($Name,$Email,$Password,$Matier){
            
            $query="INSERT INTO `user`(`name`, `email`, `password`, `role`,`id_m`) VALUES ('$Name','$Email','$Password','enseignant',$Matier)";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
          
                $result= $con->query($query);
               
        }

        function auth($Email,$Password){

            $query ="select * from user where email='$Email' and password='$Password'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
            
        }

        
        function authadmin($Email,$Password){

            $query ="select * from admin where email='$Email' and password='$Password'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);   
        }

        function logout(){
            session_start();
            session_destroy();
        }

        function remplireselectmatier(){
            $Nobjet = new connection();
                             $con=$Nobjet->connect();
                             $query ="Select * from matiere";
                             $result= $con->query($query);
                            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }