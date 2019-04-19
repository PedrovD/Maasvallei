<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/loginstyle.css" />
</head>
<body>
<?php
  include('Classes/db.connection.php'); // call db.class.php
  $bdd = new db();
  $bdd->connect();
  
  //$bdd->execute('INSERT INTO Klanten (KlantVoornaam, KlantAchternaam, Adres, Gereserveerd, DatumVanaf, DatumTot, PlaatsInDeCamping) VALUES ("firstname1", "lastname1", "pietjemanstraat 11", 1, "2019-04-18", "2019-04-24","asasasdasddasdsa")');

  ?>
<h2 style="text-align:center;">Inloggen</h2>

<form action="loginDummy.php" method="POST">
  <div class="imgcontainer">
    <img src="fotos/maasfoto.jpg" alt="Logo" class="avatar">
  </div>

  <div class="container">
    <label for="gebruikersnaam"><b>Gebruikersnaam</b></label>
    <input type="text" placeholder="voer gebruikersnaam in" name="gebruikersnaam" required>

    <label for="wachtwoord"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Voer wachtwoord in" name="wachtwoord" required>
        
    <input type="submit" name="btn-login" id="lgn">Login
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
