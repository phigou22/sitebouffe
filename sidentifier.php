<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_POST['submit'])) { 

    ////////////////////////////////////////////////////////////////////////////////////

// l'erreur était la le submit été pas rappler aux niveaux du isset donc il pouvait pas verifier si vide 
// c'est le submit que tu recupere dans ton formulaire

////////////////////////////////////////////////////////////////////////////////////////

    // Récupérer les données du formulaire
    $adressemail = $_POST['adressemail'];
    $motdepasse = $_POST['motdepasse'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sitebouffe";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête pour récupérer les informations de l'utilisateur
    $sql = "SELECT * FROM connexion WHERE adressemail='$adressemail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($motdepasse, $row['motdepasse'])) {
            echo "Connexion réussie !";
            $_SESSION['utilisateur_connecte'] = array(
                'id' => $row['id'],
                'prenom' => $row['prenom'],
                'nom' => $row['nom'],
                'email' => $row['email'],
                'motdepasse'=> $row['motdepasse'],
            );

            $_SESSION['prenom'] = $row['prenom'];
            $conn->close();

            
            header("Location: accueil1.php");
            exit();
        } else {
           
            echo "Mot de passe incorrect.";
        }
    } else {
       
        echo "Utilisateur non trouvé.";
    }

    $conn->close();
}
?>