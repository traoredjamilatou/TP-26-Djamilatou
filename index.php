<?php 
// phpinfo();
    @$nom=$_POST["nom"];
    @$prenom=$_POST["prenom"];
    @$age=$_POST["age"];
    @$valider=$_POST["valider"];
    $erreur="";
    if(isset($valider)){
    if(empty($nom)) $erreur= "<li>Nom laisse vide!</li>";
    if(empty($prenom)) $erreur.= "<li>Prenom laisse vide!</li>";
    if(!is_numeric($age) or $age<12) $erreur.= "<li>Age invalide!</li>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <div class="input">
        <input type="submit A" name="valider" value="Inscription"/>
        </div>
        </header>
    <section>
    <form name="fo" method="post" action="">
    <div class="label"> Nom</div>
    <div class="input">
    <input type="text" name="nom" value="<?php echo $nom?>"/>
    </div>
    <div class="label">Prenom</div>
    <div class="input">
        <input type="text" name="prenom" value="<?php echo $prenom?>"/>
        </div>
        <div class="label">Age</div>
    <div class="input">
        <input type="number" min="12" name="age" value="<?php echo $age?>"/>
        </div>
        <div class="input">
        <input type="submit" name="valider" value="M'inscrire"/>
        </div>
    </form>
    <?php if (!empty($erreur)){ ?>
    <div id="erreur"><?php echo $erreur ?></div>
    <?php }  ?>
    </section>
</body>
</html>