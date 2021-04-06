<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>PEULH | CHAT</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>PEULH | CHAT</header>
            <span>Votre plateforme de chat en ligne 100% gratuite</span>
            <form action="#" method="POST">
                <div class="error-txt">Ceci est un message d'erreur!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nom</label>
                        <input type="text" name="fname" placeholder="Entrez votre nom" required>
                    </div>

                    <div class="field input">
                        <label>Prénom</label>
                        <input type="text" name="lname" placeholder="Entrez votre prénom" required>
                    </div>
                </div>

                <div class="field input">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Entrez votre email" required>
                </div>

                <div class="field input">
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field image">
                    <label>Selectionner une image</label>
                    <input type="file" name="image" required>
                </div>

                <div class="field button">
                    <input type="submit" value="Suivant">
                </div>
            </form>
            <div class="link">Vous avez un compte? <a href="login.html">Se Connecter</a></div>
        </section>
    </div>
    <script src="assets/js/pass-show-hide.js"></script>
    <script src="assets/js/signup.js "></script>
</body>
</html>