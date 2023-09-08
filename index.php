<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>

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
                <li id="nav-home"><a href="index.php">Home</a>
                    <hr id="hr-home">
                </li>
                <li id="nav-projecten"><a href="./pages/projecten.php">Projecten</a>
                    <hr id="hr-projecten">
                </li>
                <li id="nav-about"><a href="./pages/about.php">About/CV</a>
                    <hr id="hr-about">
                </li>
                <li id="nav-contact"><a href="./pages/contact.php">Contact</a>
                    <hr id="hr-contact">
                </li>
            </ul>
        </navbar>
        <main-box>
            <profile>
                <left-box>
                    <header>Tom van der Hoeven</header>
                    <introductie>
                        Hoi, ik ben Tom, een 21-jarige student Software Development aan het <a
                            href="https://www.glr.nl/" class="text-link">Grafisch Lyceum Rotterdam</a>.
                        Mijn passie voor programmeren en het verkennen van nieuwe programmeertalen is wat me blij maakt.

                        Welkom op mijn portfolio, waar ik mijn projecten en softwareontwikkeling met u deel. <a
                            href="./pages/projecten.php" class="text-link">Hier</a> kun
                        je mijn werk en mijn groei in de software developer branche volgen.
                    </introductie>
                </left-box>
                <right-box>
                    <img src="./media/ik.png" alt="profiel-foto" id="profiel-foto">
                    <border></border>
                </right-box>
            </profile>
        </main-box>
    </page>
</body>

</html>