<?php
function form_security($items)
{
    //on declaclar les var de notre input’s names:
    // $name = $email = $subject = $message ='';
    $items = strip_tags($items);
    $items = trim($items);
    $items = stripslashes($items);
    $items = htmlspecialchars($items);
    return $items;
}
if (isset($_POST))

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>affichage du donnés de formulaire</h1>
    <p>Nom: <?= $_POST['name']; ?></p>
    <p>Email : <?= $_POST['email']; ?></p>
    <p>Sujet : <?= $_POST['subject']; ?></p>
    <p>Message : <?= $_POST['message']; ?></p>
</body>

</html>