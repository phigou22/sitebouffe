<?php include 'headersite.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/card2.css">
    <title>accueil</title>
</head>
<style>
    
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

h2{
  text-align: center;
  color: red;
  font-size:30px ;
}

body{
  
  background: linear-gradient(to right, green, white, red);

}

.cards{
  max-width: 1100px;
  margin: 0 auto;
  text-align: center;
  padding: 30px;
  
}

.position{
  display: flex;
  align-items: center;
}
.conteneur{
  display: flex;
  flex-wrap: wrap;
  flex: 1;
  margin: 20px;
  padding: 20px;
  border: 2px solid rgb(205, 227, 8);
  border-radius: 4px;
  transition: all .3s ease;
  border-radius: 5%;
  box-shadow: black 2px 2px 3px;
}

.conteneur > *{
  flex: 1 1 100%;
}

.conteneur:hover a{
  
  background: rgb(142, 4, 4);
}
.conteneur-1:hover a{
  
    background: rgb(47, 14, 232);
    color: black;
  }
  
  .conteneur-3:hover a{
  
    background: rgb(14, 232, 116);
  }
  
  .conteneur h2{
  font-size: 30px;
  margin: 16px 0;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-shadow: yellow 2px 2px 2px;
}
.conteneur p{
  font-size: 17px;
  font-family: 'Poppins',sans-serif;
}
.conteneur a{
  margin: 22px 0;
  background: black;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  border: 1px solid black;
  padding: 15px 0;
  border-radius: 25px;
  transition: .3s ease;
}



/* RESPONSIVE */

@media (max-width: 900px) {
  .position{
    display: flex;
    flex-direction: column;
  }
}

h1{
  text-align: center;
}
.parent4 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(3, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.di1 { grid-area: 1 / 1 / 4 / 6; 
  height: 500px;
  width: 100%;
  
}

.promo{ grid-area: 1 / 2 / 4 / 5; }


.parent5 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.di { grid-area: 1 / 1 / 2 / 6; 
height: 100px;

}
.pub { grid-area: 1 / 2 / 2 / 5; 
  width: 100%;
}
    </style>
<body>
    
<h1>Ciao a tutti e benvenuti a tartaruga <br>pizza piccola troia</h1>

    <div class="cards">
     
 
  <div class="position">
          <div class="conteneur conteneur-1">
            <div class="produits">
                <img src="../sitebouffe/images/conqued'or.jpg" width="200px" height="200pw" alt="">
  </div>
  <h2>
 Nos pizzas</h2>
  <p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempora inventore esse suscipit aspernatur delectus earum commodi, porro quo sed ea placeat voluptatum voluptatibus velit aperiam eum nihil assumenda quibusdam! </p>
  <a href="#">Ajouter aux panier</a>
          </div>
  <div class="conteneur conteneur-2">
            <div class="produits2">
                <img src="../sitebouffe/images/photopers.png" width="200px" height="200pw" alt="">
  </div>
  <h2>
   Notre personnel</h2>
  <p>
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut tempora velit expedita inventore modi. Facere fugit atque ad molestias? Impedit architecto modi velit eaque blanditiis voluptates accusamus, repudiandae alias? lorem</p>
  <a href="#">Ajouter au panier</a>
          </div>
  <div class="conteneur conteneur-3">
            <div class="produits3">
                <img src="../sitebouffe/images/R.jpg" width="200px" height="200pw" alt="">
  </div>
  <h2>
    Nos locaux</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut tempora velit expedita inventore modi. Facere fugit atque ad molestias? Impedit architecto modi velit eaque blanditiis voluptates accusamus, repudiandae alias? lorem</p>
  <a href="#">Ajouer aux panier</a>
          </div>
  </div>
  </div>
<h2> Nos promos</h2>
  <div class="parent4">
<div class="di1"> </div>
<div class="promo"> <img src="../sitebouffe/images/R (1).jpg" alt=""> </div>
</div>
<br><br><br><br>
  
<div class="parent5">
<div class="di"> </div>
<div class="pub"> <img src="../sitebouffe/images/jacquieetmichel_logo.png"> </div>
</div>
<br><br><br>

  


</body>
</html>

<?php include 'footer.php' ?>
</html>