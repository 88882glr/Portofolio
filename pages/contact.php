<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" type="image/x-icon" href="../media/cv.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <script src="../js/contact.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.3/lottie_svg.min.js"></script>
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
            <li id="nav-home"><a href="../index.php">Home</a>
                <hr id="hr-home">
            </li>
            <li id="nav-projecten"><a href="./projecten.php">Projecten</a>
                <hr id="hr-projecten">
            </li>
            <li id="nav-about"><a href="./about.php">About/CV</a>
                <hr id="hr-about">
            </li>
            <li id="nav-contact"><a href="./contact.php">Contact</a>
                <hr id="hr-contact">
            </li>
        </ul>
    </navbar>
    <main-box>
        <contact-box>
            <mail-animation></mail-animation>
            <form action="db.php" method="post" id="form">
                <div id="title">Neem contact op</div>
                <input type="text" name="voornaam" id="voornaam" class="text" placeholder="Voornaam" required>
                <input type="text" name="achternaam" id="achternaam" class="text" placeholder="Achternaam" required>
                <input type="email" name="email" id="email" class="text" placeholder="Email" required>
                <input type="tel" name="tel" id="tel" class="text" placeholder="Telefoonnummer *optioneel*"
                    maxlength="15">
                <input type="text" name="bedrijf" id="bedrijf" class="text" placeholder="Bedrijf *optioneel*">
                <label for="bericht">Bericht</label>
                <textarea name="bericht" id="bericht" maxlength="300" required></textarea>
                <input type="submit" name="verstuur" value="Verstuur" id="verstuur" onclick="animation()">
            </form>
        </contact-box>
    </main-box>
</body>

</html>