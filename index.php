<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form JS</title>
    <link rel="stylesheet" href="assets/styles.css">

</head>

<body>

    <form name="monformulaire1" action="" method="post" onSubmit="return Verification()">
        <label for="idNom">Mon nom <span class="text-danger">*</span></label>
        <input type="text" name="nom" id="idNom">
        <br><br>

        <label for="idPrenom">Prénom</label>
        <input type="text" name="prenom" id="idPrenom">
        <br><br>

        <label for="idEmail">Email <span class="text-danger">*</span></label>
        <input type="text" name="email" id="idEmail">
        <br><br>

        <label for="idTel">Téléphone</label>
        <input type="text" name="tel" id="idTel">
        <br><br>

        <input type="submit" name="valider" value="Envoyer">
    </form>
    <script src="assets/js/scripts.js"></script>
</body>

</html>