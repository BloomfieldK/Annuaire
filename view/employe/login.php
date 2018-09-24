<?php include "templates/header.php";?>

<body>
<h2> Connexion </h2> 
<a href="?ctrl=employe">Retour</a><br><br>

<div class="container" id=>
    <div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-8">.col-sm-8</div>
</div>

<form method="post">
<form action="?ctrl=employe&mth=connexion" method="post">
   <label for="email">Adresse mail</label><br>
    <input type="text" name="email" id="email"><br>
    <br>
      <br>
    <br><br><br>
<label for="pass">Mot de passe</label><br>
    <input type="pass" name="mdp" id="mdp"><br>
    <br><br>
    <br>
    <input type="submit" name="submit" value="Se connecter">
    <br><br>
</form>

<?php include "templates/footer.php";?>
</body>
</html>
