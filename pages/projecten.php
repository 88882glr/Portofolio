<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten</title>

    <link rel="stylesheet" href="../css/projecten.css">
    <link rel="icon" type="image/x-icon" href="../media/cv.png">

    <script src="../js/projecten.js"></script>
</head>

<body>
    <?php
    require 'db.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $stmt = $pdo->query("SELECT * FROM projecten");
    $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        $title = $row['title'];
        $description = $row['description'];
        $link = $row['link'];
        $projectCollab = $row['collaborators'];
    }
    ?>
    <?php
    require_once 'navbar.php';
    ?>
    <mainBox>
        <div id="title">Mijn projecten</div>
        <div id="projecten">
            <?php foreach ($rows as $row) {
                $img = base64_encode($row['img']); ?>
                <div class="project">
                    <img src="data:image/jpeg;base64,<?php echo $img; ?>" alt="ProjectImg" class="projectImg">
                    <div class="projectTitle">
                        <?php echo $row["title"]; ?>
                    </div>
                    <div class="projectDesc">
                        <?php echo $row["description"]; ?>
                    </div>
                    <a href="<?php echo $row["link"]; ?>" class="goToProject"><img src="../media/arrow-right.svg"
                            alt="arrow" id="arrow"></a>
                    <div class="collab">
                        <?php echo $row["collaborators"]; ?> Collaborators
                    </div>
                </div>
            <?php } ?>
        </div>

    </mainBox>
</body>

</html>