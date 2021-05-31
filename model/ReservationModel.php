<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";
    require_once "model/GroupeModel.php";

    
    class ReservationModel{

        // select groupe
        function selectgroupe(){

            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `group`";
            $groupe= $con->query($query);
            return $groupe->fetchAll(PDO::FETCH_ASSOC);

        }



        //select enseignant
        function selectenseignant(){

            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `enseignant`";
            $enseignant= $con->query($query);
            return $enseignant->fetchAll(PDO::FETCH_ASSOC);

        }

        //select salle
        function selectsalle(){

            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `salle`";
            $salle= $con->query($query);
            return $salle->fetchAll(PDO::FETCH_ASSOC);
            
        }

        //insert
        function insert($date,$duree,$idE,$idG,$idS){

            $Nobjet = new connection();
            $conn=$Nobjet->connect();
            $qr="select * from cours where date='$date' and duree ='$duree' and id_e=$idE";
            $result= $conn->query($qr)->fetchAll();
            if(!empty($result)){
                //ensegnant non dispo
                  return -3;
            }
            else{
                $qr="select * from cours where date='$date' and duree ='$duree' and id_g=$idG ";
                $result= $conn->query($qr)->fetchAll();
                if(!empty($result)){
                    //group non dispo
                      return -2;
                }
                else{
                    $qr="select * from cours where date='$date' and duree ='$duree' and id_s=$idS ";
                    $result= $conn->query($qr)->fetchAll();
                    if(!empty($result)){
                        //salle non dispo
                          return -1;
                    }
                    else{
                        $grp=new GroupeModel();
                        $group=$grp->getone($idG);
                        $qr2="select * from salle where id=$idS and  capacite >=".$group[0]['effectif'];
                        $res= $conn->query($qr2)->fetchAll();
                        if(empty($res)){
                            //effectif superieur
                            return 0;
                        }
                         else{
                            $query="INSERT INTO `cours`(`date`,`duree`,`id_e`,`id_g`,`id_s`) VALUES ('$date','$duree',$idE,$idG,$idS)";
                            $result= $conn->query($query);
                            return 1;
                         }
            
                    }
                }
            }
         
        
           
              
        }

        //select
        function select(){

            $query ="SELECT salle.libelle,group.libellee,user.name,cours.date,cours.duree,cours.id FROM `cours`,`group`,`salle`,`user` WHERE cours.id_s=salle.id AND cours.id_g=group.id AND cours.id_e=user.id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        }

        
        //delete
        function Delete($id){

            $query= "DELETE FROM `cours` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }

    }
