<?php
    include 'dbconnexion.php' ;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];
    
    $nb= $cnx->prepare("UPDATE  students (firstname,lastname,email,phone) VALUES (:param_firstname, :param_lastname, :param_email, :param_phone)");
    $nb->bindParam(':param_firstname',$firstname);
    $nb->bindParam(':param_lastname',$lastname);
    $nb->bindParam(':param_email',$email);
    $nb->bindParam(':param_phone',$phone);
    
    $nb->execute();
    header('Location:index.php');
      echo "étudiant est ajoutée ! " ; 
 ?>     
