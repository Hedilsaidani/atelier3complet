<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    include "dbconnexion.php";
        $req=$cnx->prepare('SELECT * FROM students where id= :param_id');
        $req->bindParam(':param_id', $_GET['id']);
        $req->execute();
        $data= $req->fetch();
    ?>
    <fieldset>
    <legend> Mettre à jour un étudiant </legend>
    <form action="store.php" method="post" class="form-online_" accept-charset="utf-8">

    <div class="row">
        <div class="col-md-6">
           <div class="form-group">
             <label>Firstname</label>
             <input type="text" name="firstname" id="firstname" value="<?= $data['firstname']?>" class="form-control" >
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
               <label>Lastname</label>
               <input type="text" name="lastname" id="lastname"    value="<?= $data['lastname']?>"    class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
               <label>Email</label>
               <input type="text" name="email" id="email"  value="<?= $data['email']?>"class="form-control">
             </div> 
        </div>
        <div class="col-md-6">
           <div class="form-group">
               <label>Phone</label>
               <input type="number" name="phone"  id="phone"  value="<?= $data['phone']?>" class="form-control">
           </div>
        </div>
    </div>
    <br>
    <br>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Enregister</button>
    <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
    </form>
    <div>
    </div>
</body>
</html>