<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
   <div class="jumbotron">
      <h3> Liste des étudiants DSI 21 g2 ISET BIZERTE 2019/2020</h3>
    </div>
       <form action="create.php" action="get" >
    <button class="btn btn-primary" >Nouvel étudiant</button><br>
<table class="table table-hover">
<tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Opérations</th>
   
</tr>
<?php
include "dbconnexion.php";
$rep= $cnx->prepare('SELECT * FROM students');
$rep->execute();
while($data=$rep->fetch()){

    echo '<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    
   
    echo '<td><a href="edit.php?id='.$data['id'].'">Editer</a></td>';
    echo '<td><a href="delete.php?id='.$data['id'].'">Supprimer</a></td>';
    echo '</tr>';
}
?> 
    
</div>
</form>
</div>
</body>
</html>