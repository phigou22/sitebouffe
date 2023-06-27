<?php

include "sidentifier.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div"> 
            <div class="div12"> <h1>Connexion</h1>
    <form action="sidentifier.php" method="POST"> 

        <label for="mail">Adresse mail :</label>
        <input type="email" name="adressemail" id="adressemail" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="motdepasse" id="motdepasse" required><br>

        <input type="submit" name="submit" value="connexion">

         

    </form> 
</div> 

</div>
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

    .div12{
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