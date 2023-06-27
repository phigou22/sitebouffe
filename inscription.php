
<?php
// je vérifie si mon formulaire d'inscription a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscription'])) {
    // je récupére les valeurs  dans le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $adressemail = $_POST['adressemail'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    // je vérifie les donnés inscri pour voir si tout est en accord

    // j'effectue la connexion de la base de donnée

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sitebouffe";

    // je me connecte a ma base de données sinon message d'erreur

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // ici je prépare la requéte pour pouvoir inserer mes données

    $sql = "INSERT INTO connexion (nom, prenom, age, adressemail, motdepasse) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nom, $prenom, $age, $adressemail, $motdepasse);
    $stmt->execute();

    // je ferme la connexion

    $stmt->close();
    $conn->close();

    // icic apres avoir je redirige l'utilisateur vers la page connexion.php
    
    header("Location: accueil1.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page d'inscription</title>
</head>
<body>
   


        <div class="div"> <div class="div1"> <h1>Inscription</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="age">Âge :</label>
        <input type="int" name="age" id="age" required><br>

        <label for="mail">Adresse mail :</label>
        <input type="email" name="adressemail" id="adressemail" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="motdepasse" id="motdepasse" required><br>

        <input type="submit" name="inscription" value="Inscription">
    </form> </div>  </div>
</body>

<style> 



    .div{
        height: 500px;
        width: 100%;
        right: -60%;
        justify-content: center;
        display: flex;
        border: solid black 2px;
      
    }

    .div1{
        background-color: brown;
        height: 500px;
        display: flex;
        width: 50%;
        flex-direction: column;
    }

    #nom > .div1{
        justify-content: center;
        display: flex;
       
        
    }

    h1{
        text-align: center;
        display: flex;
        justify-content: center;
    }

    .div input{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: 39%;
        
    }

    .div label{
        display: flex;
        justify-content: center;
        text-align: center;
        font-size: 20px;
    }
    
</style>
</html>