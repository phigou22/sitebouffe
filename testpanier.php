

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testpanier</title>
</head>
<body>
<div class="parent152">
<div class="photopizza">
    <img src="./image/pizza1.jpg" alt="" height="250px">
    <button> <a href="ajouter_au_panier.php"> ajouter au panier </a></button>
</div>

</div>
</body>
<style>

.parent152 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(3, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.photopizza{ grid-area: 1 / 2 / 4 / 5; }
    .photopizza{
        height: 250px;
    }

    
    </style>
    <div class="parent153">
<div class="photopizza">
    <img src="./image/conqued'or.jpg" alt="" height="250px">
    <button> <a href="ajouter_au_panier.php"> ajouter au panier </a></button>
</div>

</div>

<style>

.parent152 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(3, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.photopizza{ grid-area: 1 / 2 / 4 / 5; }
    .photopizza{
        height: 250px;
    }

</style>
</html>