<?php include 'headersite.php' ?>


<?php
// Vérification de la présence d'un ID dans les paramètres de l'URL

if (isset($_GET['id'])) {
    // Connexion à la base de données
    $conn = mysqli_connect('localhost', 'root', '', 'sitebouffe');

    // Vérification des erreurs de connexion
    if (mysqli_connect_errno()) {
        echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
        exit();
    }

    // Suppression du produit du panier
    $id = $_GET['id'];
    $query = "DELETE FROM panier WHERE id = '$id'";
    mysqli_query($conn, $query);

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);

    // Redirection vers la page du panier
    header("Location: panier.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
</head>
<body>
    <h1>Mon Panier</h1>
    
    <table>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th></th>
        </tr>
        <?php
        // Connexion à la base de données
        $conn = mysqli_connect('localhost', 'root', '', 'sitebouffe');

        // Vérification des erreurs de connexion
        if (mysqli_connect_errno()) {
            echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
            exit();
        }

        // Récupération des produits du panier depuis la base de données
        $query = "SELECT * FROM panier";
        $result = mysqli_query($conn, $query);

        // Affichage des produits
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><img src='" . $row['image'] . "'></td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prix'] . "</td>";
            echo "<td>" . $row['quantite'] . "</td>";
            echo "<td><a href='supprimer.php?id=" . $row['id'] . "'>Supprimer</a></td>";
            echo "</tr>";
        }

        // Fermeture de la connexion à la base de données
        mysqli_close($conn);
        ?>
    </table>
</body>
<style>

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid black;
    padding: 8px;
}

table th {
    background-color: lightgray;
}

h1 {
    text-align: center;
}

</style>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer><?php include 'footer.php' ?></footer>


</html>


