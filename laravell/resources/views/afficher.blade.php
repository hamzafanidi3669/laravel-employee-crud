<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Poste</th>
            <th>Maillot</th>
            <th>Contrat</th>
            <th>Salaire</th>
        </tr>
        ]@foreach ($var as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nom}}</td>
            <td>{{$user->prenom}}</td>
            <td>{{$user->poste}}</td>
            <td>{{$user->maillot}}</td>
            <td>{{$user->contrat}}</td>
            <td>{{$user->salaire}}</td>
            <td>
                <a href="modifier?id={{$user->id}}">modifier</a>
                <a href="supprimer?id={{$user->id}}">supprimer</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>