<?php
require_once 'Classes/db.connection.php';
require_once 'Classes/db.login.php';
$bdd = new db();
$user = new USER($bdd->connect());
if(isset($_POST['btn-login']))
{
 $user = new USER();
 $uname = $_POST['gebruikersnaam'];
 $upass = $_POST['wachtwoord'];
  echo $uname. " ". $upass;
 if($user->login($uname,$upass))
 {
  //$user->redirect('home.php');
  echo "success!!!";
 }
 else
 {
  $error = "Wrong Details !";
  echo "<br>sds";
 } 
}
?>