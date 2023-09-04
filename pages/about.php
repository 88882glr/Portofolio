<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="icon" type="image/x-icon" href="../media/cv.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <script src="../js/about.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.3/lottie_svg.min.js"></script>
</head>

<body>
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
        <topBox>
            <leftBox>
                <div id="name">Tom van der Hoeven</div>
                <div id="studie">Software Developer</div>
                <div id="myDesc">Ik studeer aan het Grafisch Lyceum Rotterdam en volg daar de opleiding Software
                    Developer. Hier leer ik verschillende programmeertalen en methodes die ik wil gaan gebruiken
                    in mijn toekomstige werkomgeving. Tijdens mijn studie heb ik verschillende <a href="./projecten.php"
                        class="textLink">projecten</a> gemaakt
                    waarin ik mijn vaardigheden laat zien. Als u contact met mij wilt maken kan dat <a
                        href="./contact.php" class="textLink">hier</a>.
                </div>
                <a href="../media/cv.pdf" download="CV" id="downloadButton">
                    <div class="downloadAnimation"></div>Download CV
                </a>

            </leftBox>
            <rightBox>
                <img src="../media/profile.png" alt="">
            </rightBox>
        </topBox>
        <bottomBox>
            <div class="title">Ervaringen</div>
            <div id="expDesc">Ik heb tot nu toe 1 jaar ervaring met coderen. Daarnaast heb ik ruime ervaring met het
                werken met computers en kan ik goed samenwerken met mijn collega's. Hieronder staan de programmeertalen
                waarmee ik heb gewerkt.</div>

            <div id="myExperiences">
                <div class="title" id="titleTalen">Programmeertalen</div>
            </div>
        </bottomBox>
    </mainBox>
</body>

</html>