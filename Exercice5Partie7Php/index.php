<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 5 Partie 7 PHP</title>
    </head>
    <body>
        <h1>Exercice 5 Partie 7 PHP</h1>
        <div class="container">
            <form action="index.php" method="post" class="bg-secondary">
                <div>
                    <label for="gender">Civilité:</label>
                    <select id="gender">
                        <option value="">Séléctionnez votre civilité</option>
                        <option value="Mr">Monsieur</option>
                        <option value="Mme">Madame</option>
                    </select>
                </div>
                <div>
                    <label for="lastName">Entrer votre nom: </label>
                    <input type="text" name="lastName" id="lastName" placeholder="Doe" required>
                </div>
                <div>
                    <label for="firstName">Entrer votre prenom: </label>
                    <input type="text" name="firstName" id="firstName" placeholder="John" required>
                </div>
                <div>
                    <input type="submit" value="S'enregistrer">
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
