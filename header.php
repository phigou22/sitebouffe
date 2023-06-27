

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

<body>

<div class="parent">
<div class="barrenav1"> 
<div class="accueil"><h4> Accueil </h4></div>

<div class="pizza"> <a href="https://origanolapizza.com/galerie/"> <h4> Nos pizzas </h4></a></div>
<div class="logo"> <img src="../sitebouffe/images/pizza-icon-logo-design-template-download-pizza-icon-logo-desilogo.png" height="100%" width="100%" alt="cuisinier italien"> </div>

<div class="connexion"> 
    <a href="connexionsite.php"><h4> Se connecter</h4> </a></form></div>

<div class="inscription"> <a href="./inscription.php"> <h4> Inscription </h4></a></div>




<?php
    // Vérifier si le bouton de déconnexion est cliqué
    if (isset($_POST['deco'])) {
        // Supprimer toutes les variables de session
        session_unset();

        // Détruire la session
        session_destroy();

        // Rediriger vers la page de connexion
        header("Location: header.php");
        exit();
    }
    ?>


</div>
</div>
<style>
/*menu burger css*/
* { 
    font-family: monospace;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

a{
    text-decoration: none;
}

body{
  
  background: linear-gradient(to right, green, white, red);

}

h4{
    font-size: 20px;
    color: black;
    text-decoration: none;
}

.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(2, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

img{
    height: 100%;
    width: auto;
    display: flex;
}

.barrenav1 { grid-area: 1 / 1 / 2 / 6; 
    height: 150px;
    background-color:green;
    width: 100%;
    justify-content: space-between;
    display: flex;
    
}

.accueil { grid-area: 1 / 1 / 2 / 2;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20%;
    height: 100%; 
}

.pizza{ grid-area: 1 / 2 / 2 / 3; 
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20%;
    height: 100%;

}

.logo { grid-area: 1 / 3 / 2 / 4; 
  
    justify-content: center;
    width: 20%;
    height: 100%;
    align-items: center;
    display: flex;

}

.connexion { grid-area: 1 / 4 / 2 / 5; 
  
    justify-content: center;
    width: 20%;
    height: 100%;
    align-items: center;
    display: flex;
}

.inscription { grid-area: 1 / 5 / 2 / 6; 
   
    justify-content: center;
    width: 20%;
    height: 100%;
    align-items: center;
    display: flex;
}

.barrenav2{ grid-area: 2 / 1 / 3 / 6 ;
   
    height: 50px;
    width: 100%;
    background-color: green;
}

.burger{grid-area: 2 / 1 / 3 / 2 ;
   
    justify-content: center;
    align-items: center;
    display: flex;
    height: 100px;
    
}

</style>
    
</body>
</html>