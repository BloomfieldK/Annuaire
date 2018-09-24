<?php include "templates/header.php";?>

<h2>Modifier un employé</h2>
<form action="?ctrl=employe&mth=edit&id=<?= $_GET['id'] ?>" method="post">
<a href="?ctrl=employe">Retour</a><br><br>

<form method="post">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" value="<?= $employe['prenom'] ?>">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?= $employe['nom']; ?>">
    <label for="email">Adresse mail</label>
    <input type="text" name="email" id="email" value="<?= $employe['email']; ?>">
    <label for="age">Age</label>
    <input type="text" name="age" id="age" value="<?= $employe['age']; ?>">
    <label for="ville">ville de résidence</label>
    <input type="text" name="ville" id="ville" value="<?= $employe['ville']; ?>">
    <br><br>
    <input type="submit" name="submit" value="Modifier">
    <br><br>
</form>

<?php if ($errors) {
			?>
			<h3>Erreur:</h3>
			<ul>
				<?php foreach ($errors as $value) { ?>
					<li><?php echo $value; ?></li>
				<?php } ?>
			</ul>
	<?php } ?>
</form>

<?php include "templates/footer.php";?>