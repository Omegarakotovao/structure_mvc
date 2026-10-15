<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "" ?></title>
</head>
<body>
    <main>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/form">Formulaire</a></li>
            <li><a href="/login">Se connecter</a></li>
            <li><a href="/register">S'inscrire</a></li>
            <li><a href="/profil">Profil</a></li>
        </ul>
        <h1>Formulaire de test</h1>
        <form action="" method="post">
            <input type="text" name="texte1" placeholder="Saisir du texte">
            <input type="text" name="texte2" placeholder="Saisir du texte">
            <input type="submit" value="Envoyer" name="submit">
        </form>
        <p><?= $data["msg"] ?? "" ?></p>
    </main>
</body>
</html>
