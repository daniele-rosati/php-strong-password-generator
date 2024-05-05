<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

    <form>
            <label for="password"> password </label>
            <input type="textbox" name="password" id="password">

        <br>
        <br>

            <label for="numeri"> numeri </label>
            <input type="checkbox" name="numeri" id="numeri">

        <br>

            <label for="lettere Maiuscole"> lettere Maiuscole </label>
            <input type="checkbox" name="lettere Maiuscole" id="lettere Maiuscole">

        <br>

            <label for="lettere minuscole"> lettere minuscole </label>
            <input type="checkbox" name="lettere minuscole" id="lettere minuscole">

        <br>

            <label for="simboli"> simboli </label>
            <input type="checkbox" name="simboli" id="simboli">

        <br>

            <input type="submit">

        <br>
        <br>

    </form>


    <?php
    include "./funzione.php"; 

    $Passwordleght = $_GET["password"];

    $numeri = $_GET["numeri"];
    $lettere_Maiuscole = $_GET["lettere_M"];
    $lettere_minuscole = $_GET["lettere_m"];
    $simboli = $_GET["simboli"];

    // $password = $password . $letter . $rndomNum;

    GeneratorePassword($Passwordleght, $numeri, $lettere_Maiuscole, $lettere_minuscole, $simboli);

    ?>

</body>
</html>