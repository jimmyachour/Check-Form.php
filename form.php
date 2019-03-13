<?php
session_start();


    $goodInput = '<div class="goodInput">OK</div>';
    $badInput = '<div class="badInput">Pas bon : </div>';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactez-nous</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <section class="form-container">
            <form  action="checkForm.php"  method="post">
                <div class="form-title-box">
                    <h2 class="form-title"><span class="form-title-bold"><span class="color-wild">C</span>ontactez</span>-nous</h2>
                    <div class="form-underline"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-box-1 col-12 col-md-5">
                        <div class="form-group col-12">
                            <label for="name"></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required>
                            <?= $_SESSION['errors']['name'] ?>
                        </div>
                        <div class="form-group col-12">
                            <label for="input-lastName"></label>
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Prenom" required>
                            <?= $_SESSION['errors']['lastName'] ?>
                        </div>
                        <div class="form-group col-12">
                            <label for="mail"></label>
                            <input type="email" class="form-control" name="mail" id="mail" placeholder="Email" required>
                            <?= $_SESSION['errors']['mail'] ?>
                        </div>
                        <div class="form-group col-12">
                            <label for="phone"></label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Téléphone" required>
                            <?= $_SESSION['errors']['phone'] ?>
                        </div>
                        <div class="form-group col-12">
                            <select name="subject" class="form-control" required>
                                <option value="" disabled selected>Liste de choix</option>
                                <option value="1">Date de reservation</option>
                                <option value="2">Probleme de paiement</option>
                                <option value="3">Juste pour nous prendre la tête</option>
                            </select>
                            <?= $_SESSION['errors']['subject'] ?>
                        </div>
                    </div>
                    <div class="form-box-2 col-12 col-md-5">
                        <div class="form-group col-12">
                            <label for="text"></label>
                            <textarea class="form-control" id="text" name="text" rows="5" placeholder="Votre message" required></textarea>
                            <?= $_SESSION['errors']['text'] ?>
                            <button type="submit" class="btn col-12 contact-btn">Envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>
</html>




