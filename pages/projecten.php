<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten</title>

    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/projecten.css">
    <link rel="icon" type="image/x-icon" href="../media/cv.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <script src="../js/projecten.js"></script>
</head>

<body onload="projectAnimation();">
    <?php
    require 'db.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $stmt = $pdo->query("SELECT * FROM projecten");
    $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        $title = $row['title'];
        $descr = $row['descr'];
        $link = $row['link'];
        $projectCollab = $row['collaborators'];
        $taal1 = $row['taal1'];
        $taal2 = $row['taal2'];
        $taal3 = $row['taal3'];
        $taal4 = $row['taal4'];
    }
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
        <heading>Mijn projecten</heading>
        <sub-title>School projecten</sub-title>
        <school-projecten>Voor mijn opleiding op het Grafisch Lyceum Rotterdam heb ik een aantal opdrachten
            gemaakt die mij hebben geholpen met het leren van programmeertalen</school-projecten>
        <projecten>
            <?php foreach ($rows as $row) {
                $img = base64_encode($row['img']);
                $taal1 = base64_encode($row['taal1']);
                $taal2 = base64_encode($row['taal2']);
                $taal3 = base64_encode($row['taal3']);
                $taal4 = base64_encode($row['taal4']); ?>
                <project>
                    <img loading="lazy" src="data:image/jpeg;base64,<?php echo $img; ?>" alt="Project-img"
                        class="project-img">
                    <project-title>
                        <?php echo $row["title"]; ?>
                    </project-title>
                    <project-desc>
                        <?php echo $row["descr"]; ?>
                    </project-desc>
                    <a href="<?php echo $row["link"]; ?>" class="go-to-project" target="_blank"><img
                            src="../media/arrowBlack.svg" alt="arrow" class="arrow-black"><img src="../media/arrowBlue.svg"
                            alt="arrow" class="arrow-blue"></a>
                    <collab>
                        <?php echo $row["collaborators"]; ?> Collaborators
                    </collab>
                    <languages>
                        <img loading="lazy" src="data:image/jpeg;base64,<?php echo $taal1; ?>" alt="Project-img"
                            class="taal-img">
                        <img loading="lazy" src="data:image/jpeg;base64,<?php echo $taal2; ?>" alt="Project-img"
                            class="taal-img">
                        <img loading="lazy" src="data:image/jpeg;base64,<?php echo $taal3; ?>" alt="Project-img"
                            class="taal-img">
                        <img loading="lazy" src="data:image/jpeg;base64,<?php echo $taal4; ?>" alt="Project-img"
                            class="taal-img">
                    </languages>
                </project>
            <?php } ?>
            </div>
    </main-box>
</body>

</html>