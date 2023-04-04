<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="thanks.php" method="post">
        <h1>FORMULAIRE</h1>
        <div>
            <label for="Nom">Nom</label>
            <input 
            id="Nom"
            required
            placeholder="Blanche"
            type="text">
        </div>
        <div>
            <label for="Prénom">Prénom</label>
            <input 
            id="Prénom"
            required
            placeholder="Neige"
            type="text">
        </div>
        <div>
            <label for="Email">E-mail</label>
            <input 
            id="Email"
            required
            placeholder="blanche-neige@nains.fr"
            type="text">
        </div>
        <div>
            <label for="Téléphone">Téléphone :</label>
            <input 
            id="Téléphone"
            required
            placeholder="0123456789"
            size="10"
            type="number">
        </div>
        <div>
            <label for="Sujet">Les nains :</label>
           <select name="Sujets" id="Sujet">
            <option value="">Atchoum</option>
            <option value="">Dormeur</option>
            <option value="">Grincheux</option>
            <option value="">Joyeux</option>
            <option value="">Simplet</option>
            <option value="">Timide</option>
            <option value="">Prof</option>

        </select>
        </div>
        <div>
            <label for="Message">Votre message :</label>
            <textarea 
            name="Message" 
            placeholder="Bonjour, j'aimerai faire appel à ce nain pour une semaine."
            id="Message" 
            cols="30" 
            rows="5" 
            required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>

<?php
var_dump($_POST);
?>