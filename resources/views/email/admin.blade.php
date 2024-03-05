<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body>
    <header style="margin-top: 20px">
        <h1 style="text-align: center">Vibecro Corporation</h1>
    </header>

    <main style="padding: 20px; margin: 50px;">
        <p>Nouvelle candidature soumise</p>
        <ul>
            <li style="margin: 5px 0px"> <b>Nom</b> : {{ $candidate->name }} </li>
            <li style="margin: 5px 0px"> <b>Date de naissance</b> : {{ $candidate->birthday }} </li>
            <li style="margin: 5px 0px"> <b>Sexe</b> : {{ $candidate->sex }} </li>
            <li style="margin: 5px 0px"> <b>Email</b> : {{ $candidate->email }} </li>
            <li style="margin: 5px 0px"> <b>Tel</b> : {{ $candidate->tel }} </li>
            <li style="margin: 5px 0px"> <b>Ville</b> : {{ $candidate->city }} </li>
            <li style="margin: 5px 0px"> <b>Address</b> : {{ $candidate->address }} </li>
            <li style="margin: 5px 0px"> <b>Diplome</b> : {{ $candidate->diploma }} </li>
            <li style="margin: 5px 0px"> <b>Année d'experience</b> : {{ $candidate->experience }} </li>
        </ul>
    </main>

    <footer style="padding: 20px; margin: 50px;">
        <p style="text-align: left">Cordialement</p>
        <p style="text-align: left">Vibecro Corporation</p>
        <p style="text-align: left"> Tel: 55 69 56 56 </p>
    </footer>
</body>

</html>
