<!doctype html>
<html lang="en">
  <head>
  <!-- link bootstrap forminsert -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- link dashboard -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/brief5-nv/mvc/view/css/main.css">
    <title>Reservation</title>

  

  </head>


  <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html">
                        <h2>DASHOARD</h2>
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="">Reserver Salle</a></li>  
                    </ul>
                </div>
            </div>
            
           <div id="form-insert">
          
           <form action="http://localhost/brief5-nv/mvc/login/Logout" method="post">
    <input type="submit" class="btn btn-dark" id="buttonlogout" name="logout" value="Deconnexion">
     </form>

  <div id="salleForm">
        <p>
            <form action="http://localhost/brief5-nv/mvc/reservation/create" method ="Post">
               
               <div id="inputs">

                   <div class="col-xs-6">
                       <label for="ex3">Date</label>
                       <input class="form-control" id="ex3" type="date" name="date">
                   </div>

                   <div class="col-xs-6">
                       <label for="ex3">Duree</label>
                       <select name="duree" id="duree" class="selectionM" >
                         <option value=""></option>
                         <option value="08:00-10:00">08:00-10:00</option>
                         <option value="10:00-12:00">10:00-12:00</option>
                         <option value="14:00-16:00">14:00-16:00</option>
                         <option value="16:00-18:00">16:00-18:00</option>
                       </select>
                   </div>

                   <div class="col-xs-6">
                       <label for="ex3">groupe</label>
                       <select name="groupe" class="selectionM"  >
                         <option value=""></option>
                         <?php
                             foreach ($groupes as $groupe)
                             echo "<option value='".$groupe['id']. "'>" . $groupe['libellee'] . "</option>";
                            ?>
                       </select>
                   </div>

                   <div class="col-xs-6">
                       <label for="ex3">Salle</label>
                       <select name="salle" class="selectionM" >
                         <option value=""></option>
                         <?php
                             foreach ($salles as $salle)
                             echo "<option value='".$salle['id']. "'>" . $salle['libelle'] . "</option>";
                            ?>
                       </select>
                   </div>
               </div>

               <div class="col-md-12 text-center">
                   <input type="submit" id="buttonadd" class="btn btn-dark" value="Reserver" name="ajouter">
               </div>

           </form>
        </p>
    </div>
    

<!--------------------- table ---------------------->

    <div >

        <table class="table table-hover" id="table">
            
            <tr>
            
                <th>id</th>
                <th>Date</th>
                <th>Duree</th>
                <th>Ensegnant</th>
                <th>Groupe</th>
                <th>Salle</th>
           
            </tr>

            <!-- loop to get rows -->
            <?php
        foreach($reservation as $res){?>
        <tr>
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['date'] ?></td>
        <td><?php echo $res['duree'] ?></td>
        <td><?php echo $res['name'] ?></td>
        <td><?php echo $res['libellee'] ?></td>
        <td><?php echo $res['libelle'] ?></td>
        <td style="display: flex;"><form action="http://localhost/brief5-nv/mvc/reservation/delete"  method="post"> <input type="text" name="id" value="<?php echo $res['id'] ?>" hidden> <button name="supprimer"  class="btn btn-dark">Annuler Reservation</button></form> &nbsp; &nbsp; 

   
        </tr>
      <?php 
       }
    ?>

        </table>

    </div>
           </div>
        </div>

    </div>


 
</body>
</html>
