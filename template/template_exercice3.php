<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "" ?></title>
</head>
<body>
    <main>
        <form action="" method="post">
            <input type="text" name="nom" placeholder="saisir le nom">
            <input type="text" name="prenom" placeholder="saisir le prénom">
            <input type="text" name="email" placeholder="saisir votre email">
            <input type="password" name="mot_de_passe" placeholder="saisir un mot de passe">
            <input type="password" name="confirm_mot_de_passe" placeholder="confirmer le mot de passe">
            <input type="submit" value="Vérifier" name="submit">
        </form>
        <p><?= $data["msg"] ?? "" ?></p>
    </main>
</body>
</html>
