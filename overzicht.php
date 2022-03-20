<?php

include('connect.php');

// Query maken om alle rijen uit de tabel taak op te halen
$query = $pdo->query("SELECT * FROM inschrijf");

?>

<!-- Tabel aanmaken in HTML -->
<table>
    <tr>
        <th>Naam</th>
        <th>Datum</th>
        <th>Aantal</th>
        <th>Datum van aanmaak</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <tr>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['datum']; ?></td>
        <td><?php echo $row['people']; ?></td>
        <td></n><?php echo $row['datumaanmaak']; ?></td>

    </tr>

    <?php } ?>
</table>