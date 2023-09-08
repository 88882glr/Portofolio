<?php

$host = 'localhost';
$dbname = 'portofolioTom';
$username = 'Kees';
$password = 'Lievelot123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Verbindingsfout: " . $e->getMessage());
}

if (isset($_POST["submitProject"])) {
    $title = SQLite3::escapeString($_POST["title"]);
    $descr = SQLite3::escapeString($_POST["descr"]);
    $link = SQLite3::escapeString($_POST["hoelang"]);
    $collaborators = SQLite3::escapeString($_POST["collaborators"]);

    $query = "INSERT INTO projecten (title, descr, link, collaborators) 
            VALUES (:title, :descr, :link, :collaborators)";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':descr', $descr);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':collaborators', $collaborators);

    try {
        $stmt->execute();
        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        die("Fout bij het toevoegen van gegevens: " . $e->getMessage());
    }
}

if (isset($_POST["wijzig"])) {
    $wijzigtitle = SQLite3::escapeString($_POST['wijzigtitle']);
    $wijzigdescr = SQLite3::escapeString($_POST['wijzigdescr']);
    $wijziglink = SQLite3::escapeString($_POST['wijziglink']);
    $wijzigcollaborators = SQLite3::escapeString($_POST['wijzigcollaborators']);
    $id = SQLite3::escapeString($_POST['nummer']);

    $query = "UPDATE projecten SET title = :title, descr = :descr, link = :link, collaborators = :collaborators WHERE id = :id";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':title', $wijzigtitle);
    $stmt->bindParam(':descr', $wijzigdescr);
    $stmt->bindParam(':link', $wijziglink);
    $stmt->bindParam(':collaborators', $wijzigcollaborators);
    $stmt->bindParam(':id', $id);

    try {
        $stmt->execute();
        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        die("Fout bij het toevoegen van gegevens: " . $e->getMessage());
    }
}