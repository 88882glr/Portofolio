<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>

    <link rel="icon" type="image/x-icon" href="./media/cv.png">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <script src="./js/index.js"></script>
</head>

<body>
    <page>
        <navbar>
            <ul>
                <li id="navHome"><a href="index.php">Home</a>
                    <hr id="hrHome">
                </li>
                <li id="navProjecten"><a href="./pages/projecten.php">Projecten</a>
                    <hr id="hrProjecten">
                </li>
                <li id="navAbout"><a href="./pages/about.php">About/CV</a>
                    <hr id="hrAbout">
                </li>
                <li id="navContact"><a href="./pages/contact.php">Contact</a>
                    <hr id="hrContact">
                </li>
            </ul>
        </navbar>
        <mainBox>
            <profile>
                <leftbox>
                    <div id="title">Tom van der Hoeven</div>
                    <div id="introductie">
                        Hoi, ik ben Tom, een 21-jarige student Software Development aan het <a
                            href="https://www.glr.nl/" class="textLink">Grafisch Lyceum Rotterdam</a>.
                        Mijn passie voor programmeren en het verkennen van nieuwe programmeertalen is wat me blij maakt.

                        Welkom op mijn portfolio, waar ik mijn projecten en softwareontwikkeling met u deel. <a
                            href="./pages/projecten.php" class="textLink">Hier</a> kun
                        je mijn werk en mijn groei in de software developer branche volgen.
                    </div>
                </leftbox>
                <rightbox>
                    <img src="./media/ik.png" alt="profielFoto" id="profielFoto">
                    <div id="border"></div>
                </rightbox>
            </profile>
        </mainBox>
    </page>
</body>

</html>