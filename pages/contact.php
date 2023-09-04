<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" type="image/x-icon" href="../media/cv.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    require 'db.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <navbar>
        <ul>
            <li id="navHome"><a href="../index.php">Home</a>
                <hr id="hrHome">
            </li>
            <li id="navProjecten"><a href="./projecten.php">Projecten</a>
                <hr id="hrProjecten">
            </li>
            <li id="navAbout"><a href="./about.php">About/CV</a>
                <hr id="hrAbout">
            </li>
            <li id="navContact"><a href="./contact.php">Contact</a>
                <hr id="hrContact">
            </li>
        </ul>
    </navbar>
    <mainBox>
        <contactBox>
            <div id="title">Neem contact op</div>
            <form action="db.php" method="post">
                <input type="text" name="voornaam" id="voornaam" class="text" placeholder="Voornaam" required>
                <input type="text" name="achternaam" id="achternaam" class="text" placeholder="Achternaam" required>
                <input type="email" name="email" id="email" class="text" placeholder="Email">
                <input type="tel" name="tel" id="tel" class="text" placeholder="Telefoonnummer *optioneel*"
                    maxlength="15">
                <input type="text" name="bedrijf" id="bedrijf" class="text" placeholder="Bedrijf *optioneel*">
                <label for="bericht">Bericht</label>
                <textarea name="bericht" id="bericht" maxlength="300" required></textarea>
                <input type="submit" name="verstuur" value="Verstuur" id="verstuur">
            </form>
        </contactBox>
    </mainBox>
</body>

</html>