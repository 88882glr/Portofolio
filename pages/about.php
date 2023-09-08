<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

<body onload="experienceAnimation()">
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
        <top-box>
            <left-box>
                <name>Tom van der Hoeven</name>
                <studie>Software Developer</studie>
                <my-desc>Ik studeer aan het Grafisch Lyceum Rotterdam en volg daar de opleiding Software
                    Developer. Hier leer ik verschillende programmeertalen en methodes die ik wil gaan gebruiken
                    in mijn toekomstige werkomgeving. Tijdens mijn studie heb ik verschillende <a href="./projecten.php"
                        class="text-link">projecten</a> gemaakt
                    waarin ik mijn vaardigheden laat zien. Als u contact met mij wilt maken kan dat <a
                        href="./contact.php" class="text-link">hier</a>.
                </my-desc>
                <a href="../media/cv.pdf" download="CV" id="download-button">
                    <download-animation></download-animation>Download CV
                </a>
            </left-box>
            <right-box>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rfscVS0vtbw?si=YZC8Mr7a0FSEWFLl"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </right-box>
        </top-box>
        <bottom-box>
            <heading>Ervaringen</heading>
            <exp-desc>Ik heb tot nu toe 1 jaar ervaring met coderen. Daarnaast heb ik ruime ervaring met het
                werken met computers en kan ik goed samenwerken met mijn collega's. Hieronder staan de programmeertalen
                waarmee ik heb gewerkt.</exp-desc>
            <my-experiences>
                <title-talen>Programmeertalen</title-talen>
            </my-experiences>
        </bottom-box>
    </main-box>
</body>

</html>