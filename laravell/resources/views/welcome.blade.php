<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULAIRE</h1>
    <form action="ajouter" method="post">
        @csrf
        <input type="text" disabled name="id" placeholder="id" id=""> <br> <br>
        <input type="text" name="nom" placeholder="Nom" id=""> <br> <br>
        <input type="text" name="prenom" placeholder="prenom" id=""> <br> <br>
        <select name="poste" id="">
            <option value="-1">Votre Poste</option>
            <option value="1">Milieu</option>
            <option value="2">Defense</option>
            <option value="3">Attaque</option>
        </select>    
        <input type="number"  name="maillot" placeholder="Numero de maillot" id=""> <br> <br>
        <input type="radio" name="contrat" id="oui">OUI
        <input type="radio" name="contrat" id="nom"> Non <br> <br>
        <input type="number"  name="salaire" placeholder="Salaire En DHS" id=""> <br> <br> <br>

        <button name="submit">Ajouter</button>
        <input type="reset" value="Annuler">

    
    </form>
    
</body>
</html>