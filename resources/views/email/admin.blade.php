<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body style="background: #ddd">
    <header style="margin-top: 20px">
        <h1 style="text-align: center">Vibecro Corporation</h1>
    </header>

    <main style="background: #fff; padding: 20px; margin: 50px; margin-bottom: 0">
        <p>Nouvelle candidature soumise</p>
        <ul>
            <li style="margin: 5px 0px"> Nom : {{ $candidate->name }} </li>
            <li style="margin: 5px 0px"> Date de naissance : {{ $candidate->birthday }} </li>
            <li style="margin: 5px 0px"> Sexe : {{ $candidate->sex }} </li>
            <li style="margin: 5px 0px"> Email : {{ $candidate->email }} </li>
            <li style="margin: 5px 0px"> Tel : {{ $candidate->tel }} </li>
            <li style="margin: 5px 0px"> Ville : {{ $candidate->city }} </li>
            <li style="margin: 5px 0px"> Address : {{ $candidate->address }} </li>
            <li style="margin: 5px 0px"> Diplome : {{ $candidate->diploma }} </li>
            <li style="margin: 5px 0px"> Année d'experience : {{ $candidate->experience }} </li>
        </ul>
    </main>

    <footer style="background: #fff; padding: 20px; margin: 50px; margin-top: 0">
        <p style="text-align: left">Cordialement</p>
        <p style="text-align: left">Vibecro Corporation</p>
        <p style="text-align: left"> Tel: 55 69 56 56 </p>
    </footer>
</body>

</html>
