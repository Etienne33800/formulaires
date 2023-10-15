<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="form.php" method="post">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" > <br>

        <label for="name">Nom :</label>
        <input type="text" name="name" ><br>

        <label for="email">E-mail :</label>
        <input type="email" name="email" ><br>

        <label for="phonenumber">Téléphone :</label>
        <input type="tel" name="phonenumber" ><br>

        <label for="subject">Sujet :</label>
        <select name="subject">
            <option value="hello">hello</option>
            <option value="demande">Demande</option>
            <option value="Autre">Autre</option>
        </select><br>

        <label for="message">Message :</label>
        <textarea name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="envoyer">
    </form>



  </body>
</html>