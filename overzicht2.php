<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Overzicht 2 | Dylano Valentijn</title>
</head>
<body>
    <h3>Overzicht van alle bestellingen</h3>
    <?php
    $query = "SELECT * FROM inschrijf";
    $conn = $pdo->prepare($query);
    if ($conn->execute()) {
        $aantalArtikelenTotaal = 0;
        $bestellingen = $conn->fetchAll(PDO::FETCH_OBJ);
        foreach ($bestellingen as $bestelling) {
            echo "ID: $bestelling->id
            Datum: $bestelling->datum " . 
            "Naam: $bestelling->naam
            Aantal: $bestelling->people<br/>";


        }
        echo "Totaal aantal artikelen: " . $aantalArtikelenTotaal;

    ?>
    <h3>Overzicht van bestellingen van 15 maart 2022</h3>
    <?php
    $query = "SELECT * FROM inschrijf WHERE datum = '15maart'";
    $conn = $pdo->prepare($query);
    if ($conn->execute()) {
        $aantalArtikelen15maart = 0;
        $bestellingen = $conn->fetchAll(PDO::FETCH_OBJ);
        foreach ($bestellingen as $bestelling) {
            echo "ID: $bestelling->id Datum: $bestelling->datum " . "Naam: $bestelling->naam Aantal: $bestelling->people<br/>";
            $aantalArtikelen15maart += $bestelling->people;

        }
        echo "Totaal aantal artikelen: " . $aantalArtikelen15maart;
    }
}
?>
    <h3>Overzicht van bestellingen van 23 maart 2022</h3>
    <?php
        $query = "SELECT * FROM inschrijf WHERE datum = '23maart'";
        $conn = $pdo->prepare($query);
        if ($conn->execute()) {
            $aantalArtikelen23maart = 0;
            $bestellingen = $conn->fetchAll(PDO::FETCH_OBJ);
            foreach ($bestellingen as $bestelling) {
                echo "ID: $bestelling->id Datum: $bestelling->datum " . "Naam: $bestelling->naam Aantal: $bestelling->people<br/>";
                $aantalArtikelen23maart += $bestelling->people;
    
            }
            echo "Totaal aantal artikelen: " . $aantalArtikelen23maart;
        }
$aantalArtikelenTotaal += $aantalArtikelen15maart->$aantalArtikelen23maart;
    ?>
</body>
</html> 