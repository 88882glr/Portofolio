<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <?php
    require 'admindb.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $stmt = $pdo->query("SELECT * FROM projecten");
    $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

    ?>
    <div id="container">
        <h1>TakenLijst</h1>
        <table id="taaktabel">
            <tr>
                <th>Nummer</th>
                <th>Title</th>
                <th>Beschrijving</th>
                <th>Link</th>
                <th>Samenwerkers</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td>
                        <?php echo $row["id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["title"]; ?>
                    </td>
                    <td>
                        <?php echo $row["descr"]; ?>
                    </td>
                    <td>
                        <?php echo $row["link"]; ?>
                    </td>
                    <td>
                        <?php echo $row["collaborators"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <flex>
            <add-container>
                <h1>Voeg project toe</h1>
                <form action="admindb.php" method="post">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" required>

                    <label for="descr">Description</label>
                    <input type="text" name="descr" id="descr" required>

                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" required>

                    <label for="collaborators">Collaborators</label>
                    <input type="text" name="collaborators" id="collaborators" required>

                    <input type="submit" name="submitProject" value="Voeg toe" id="knop">
                </form>
            </add-container>
            <delete-container>
                <h1>Verwijder project</h1>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" name="nummer" placeholder="Zoek project nummer">
                    <input type="submit" value="Zoek taak" class="marginbutton">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $ingevuldeNummer = SQLite3::escapeString($_POST['nummer']);
                    if (empty($ingevuldeNummer)) {
                        echo "U heeft niks ingevuld";
                    } else {
                        $stmt = $pdo->query("SELECT * FROM projecten WHERE id = $ingevuldeNummer");
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($rows as $row) {
                            echo "Wilt u dit project verwijderen?";
                            echo '<form method="post" action="' . $_SERVER["PHP_SELF"] . '">';
                            echo '<input type="hidden" name="nummer" value="' . $ingevuldeNummer . '">';
                            echo '<input type="submit" name="verwijder" class="marginbutton" id="verwijderButton" value="Ja, verwijder taak">';
                            echo '</form>';
                        }
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verwijder"])) {
                    $ingevuldeNummer = SQLite3::escapeString($_POST['nummer']);
                    $stmt = $pdo->query("DELETE FROM projecten WHERE id = $ingevuldeNummer");
                }
                ?>
            </delete-container>
            <change-container>
                <h1>Verander project</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" name="nummer" placeholder="Zoek project nummer">
                    <input type="submit" value="Zoek taak" class="marginbutton">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $ingevuldeNummerWijzig = SQLite3::escapeString($_POST['nummer']);
                    if (empty($ingevuldeNummer)) {
                        echo "U heeft niks ingevuld";
                    } else {
                        $stmt = $pdo->query("SELECT * FROM projecten WHERE id = $ingevuldeNummerWijzig");
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($rows as $row) { ?>
                            <form action="admindb.php" method="post">

                                <label for="title">Title</label>
                                <input type="text" name="wijzigtitle" id="title" value="<?php echo $row["title"]; ?>" required>

                                <label for="wie">Description</label>
                                <input type="text" name="wijzigdescr" id="descr" value="<?php echo $row["descr"]; ?>" required>

                                <label for="link">Link</label>
                                <input type="text" name="wijziglink" id="link" value="<?php echo $row["link"]; ?>" required>

                                <label for="collaborators">Collaborators</label>
                                <input type="text" name="wijzigcollaborators" id="collaborators"
                                    value="<?php echo $row["collaborators"]; ?>" required>

                                <input type="hidden" name="nummer" value="<?php echo $row["id"]; ?>">
                                <input type="submit" name="wijzig" value="Wijzig project" id="knop" class="marginbutton">
                            </form>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </change-container>
        </flex>
    </div>

</html>