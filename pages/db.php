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

if (isset($_POST["verstuur"])) {
    $voornaam = SQLite3::escapeString($_POST["voornaam"]);
    $achternaam = SQLite3::escapeString($_POST["achternaam"]);
    $email = SQLite3::escapeString($_POST["email"]);
    $tel = SQLite3::escapeString($_POST["tel"]);
    $bedrijf = SQLite3::escapeString($_POST["bedrijf"]);
    $bericht = SQLite3::escapeString($_POST["bericht"]);

    $query = "INSERT INTO contact (voornaam, achternaam, email, tel, bedrijf, bericht) 
            VALUES (:voornaam, :achternaam, :email, :tel, :bedrijf, :bericht)";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':voornaam', $voornaam);
    $stmt->bindParam(':achternaam', $achternaam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':bedrijf', $bedrijf);
    $stmt->bindParam(':bericht', $bericht);

    try {
        $stmt->execute();
        header("Location: contact.php");
        exit();
    } catch (PDOException $e) {
        die("Fout bij het toevoegen van gegevens: " . $e->getMessage());
    }
}