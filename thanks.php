

<?php



$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }
    if (!isset($_POST['name']) || trim($_POST['name']) === '') {
        $errors[] = "Le nom est obligatoire";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'e-mail n'est pas valide";
    }
    if (!isset($_POST['phonenumber']) || trim($_POST['phonenumber']) === '') {
        $errors[] = "Le numéro de téléphone est obligatoire";
    }
    if (!isset($_POST['subject']) || trim($_POST['subject']) === '') {
        $errors[] = "Le sujet est obligatoire";
    }
    if (!isset($_POST['message']) || trim($_POST['message']) === '') {
        $errors[] = "Le message est obligatoire";
    }
}

if (empty($errors)) {
    
    header('Location: thanks.php');
    exit();
}
?>

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