<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion en HTML & CSS - Frenchcoder</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <form>
  <?php
if (isset($_POST['pass']) OR $_POST['pass'] != "LS" AND isset($_POST['pseudo']) OR $_POST['pseudo'] != "ORDILS.")   
{   
?>
            <form method="post" action="index.php">
             
                <p>
                    <label for="pseudo">Login:</label><br/>
                    <input type="text" name="pseudo" id="pseudo" />
                    <br />
                    <label for="pass">Votre mot de passe :</label><br/>
                    <input type="password" name="pass" id="pass" /><br/>
                    <input type="submit" value="Connexion" name="connexion" />
               </p>
            </form>
<?php
}
else
    {
        echo "Administration";
    }
?>     


  </form>
</body>
</html>