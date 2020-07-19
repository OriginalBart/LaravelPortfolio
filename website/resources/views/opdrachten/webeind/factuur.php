<?php

if(!empty ($_POST)){
//print_r ($_POST);
echo "Mijn naam is";
echo $_POST ["voornaam"];
echo "<br>";
echo "Mijn tussenv is:";
echo $_POST ["tussenvoegsel"];
echo "<br>";
echo "Mijn achternaam is:";
echo $_POST ["achternaam"];
echo "<br>";
echo "Mijn email is:";
echo $_POST ["email"];
echo "<br>";
echo "Mijn telefoonnummer is:";
echo $_POST ["telefoonnummer"];
echo "<br>";
echo "Mijn adres is:";
echo $_POST ["adres"];
echo "<br>";
echo "Mijn plaats is:";
echo $_POST ["plaats"];
echo "<br>";
echo "Mijn postcode is:";
echo $_POST ["postcode"];
echo "<br>";
echo "Mijn telefoonnummer is:";
echo $_POST ["telefoonnummer"];
echo "<br>";
echo "Mijn rekeningnummer is:";
echo $_POST ["nummer"];
echo "<br>";
echo "Mijn password is:";
echo $_POST ["passwoord"];
echo "<br>";
}

?>