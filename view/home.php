<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://localhost/brief5-nv/mvc/view/css/main.css">
</head>

<body>

  <div class="wrapper">
   
      <form action="http://localhost/brief5-nv/mvc/login/authentification" method="post" class="form-right">
          <h2 class="text-uppercase"> Connectez Vous</h2>
          <div class="row">
          </div>
          <div class=" col-sm-6 "> <label>votre email</label> <input type="email" class="input-field" name="email" required > </div>
          <div class="row">
              <div class="col-sm-6 "> <label> saisir votre mot de passe</label> <input type="password" name="password" id="pwd" class="input-field" required> </div>
          </div>
          
        <div  class="form-field">
         
          <div  class="button11">
          <button name="submit" class="btn btn-info btn-lg ">login</button> 
          </form>
          <form action="http://localhost/brief5-nv/mvc/regester/" method="POST">
          <button   class="btn btn-success btn-lg ">inscription</button>
       
           </div>
          </form>
        </div>
         
          </div>
   
      
      
  
</div>

</div>
</body>
</html>