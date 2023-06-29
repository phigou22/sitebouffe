<?php
require_once 'config.php';
session_start();

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $sql = "SELECT * FROM panier WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $_SESSION['panier'][] = $product;
        echo "Le produit a été ajouté au panier avec succès.";
    } else {
        echo "Produit non trouvé.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
        <tr>
        <td><img src="/panier/img/<?= $prodss->$id; ?>.webp" alt=""></td>
    <td><?= $prodss->$row ['nom'] ?></td>
    <td><?= $prodss->$row ['prix'] ?>€</td>
    <td><?= $prodss->$row ['quantite'] ?>€</td>
    <td><?= $_SESSION['panier'][$prodss->$id]?></td>
    <td><a href="/panier/panier.php?delPanier=<?= $prodss->$id; ?>">Supprimer le produit</a></td>
    </tr>
        </tr>
        
    </table>




    
</body>
</html>