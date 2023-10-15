<?php
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "Merci $firstname $name de nous avoir contacté à propos de \"$subject\".<br>";

    echo "Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $phonenumber dans les plus brefs délais pour traiter votre demande:<br>";

    echo $message;
    ?>