<?php 
include 'connect.php';

?>

<DOCTYPE= HTML>
    <html>
        <head>
            <title>Internet of Things | Dylano Valentijn </title>
        </head>
        <style>
            body {
                background-color:  #35383d;
                color: white;
            }
        </style>
        <body>
        <form method="post">
        <h2>Wat is uw aanhef?</h2> <INPUT TYPE="text" name='aanhef'/>

        <h2>Wat is uw geslacht?</h2> <label for="gender"></label>
        <input type="radio" name="gender" value="female">Vrouw
        <input type="radio" name="gender" value="male">Man
        <input type="radio" name="gender" value="other">Anders

        <h2>Wat is uw naam?</h2> <INPUT TYPE="text" name='naam'/>

        <h2>Wat is uw adres?</h2> <input name="adres" rows="2" cols="30">
        </textarea>   

        <h2>Wat is uw postcode?</h2> <INPUT TYPE="text" name='postcode'/>

        <h2>Wat is uw woonplaats?</h2> <INPUT TYPE="text" name='woonplaats'/>

        <h2>Wat is uw telefoon?</h2> <INPUT TYPE="tel" name='telefoon'/>

        <h2>Wat is uw email?</h2> <INPUT TYPE="text" name='email'/>

        <h2 for="datum">Datum:</h2>
        <select name="datum" id="datum">
	    <option value="" selected>--- Kies uw datum ---</option>
	    <option value="15maart">Dinsdag 15 maart 2022 van 09:00u - 13:30</option>
	    <option value="23maart">Woensdag 23 maart 2022 van 13:00u - 17:30u</option>
        </select>

        <h2>Met hoeveel personen wilt u?</h2> <INPUT TYPE="number" name='people'/>

      <h2> <input type="submit" name="btcSave">  </h2>
    </form>

    <?php 
if (isset($_POST["btcSave"])) {
    include('connect.php');


    $aanhef = $_POST["aanhef"];
    $gender = $_POST["gender"];
    $naam = $_POST["naam"];
    $adres = $_POST["adres"];
    $postcode = $_POST["postcode"];
    $woonplaats = $_POST["woonplaats"];
    $telefoon = $_POST["telefoon"];
    $email = $_POST["email"];
    $datum = $_POST["datum"];
    $people = $_POST["people"];

    $query= "INSERT INTO inschrijf (aanhef, gender, naam, adres, postcode, woonplaats, telefoon, email, datum, people) VALUES" . "('$aanhef', '$gender', '$naam', '$adres', '$postcode', '$woonplaats', '$telefoon', '$email', '$datum', '$people')";

    $stm = $pdo->prepare($query);

    if ($stm->execute()) {

    } else {
        echo "Deze inschrijving is goed toegevoegd!";
    }
}
?>







</html>