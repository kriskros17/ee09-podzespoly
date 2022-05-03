<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl8.css" type="text/css">
    <title>Nasz sklep komputerowy</title>
</head>
<body>
    <div id="blok-menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </div>
    <div id="blok-logo">
        <h2>Podzespoły komputerowe</h2>
    </div>
    <div id="blok-glowny">
        <h1>Dziesiejsze promocje</h1>
        <table>
        <tr>
            <th>NUMER</th>
            <th>NAZWA PODZESPOŁU</th>
            <th>OPIS</th>
            <th>CENA</th>
        </tr>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'podzespoly');
        $query = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena<1000;";
        $result = mysqli_query($connect,$query);

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>$row[id].</td>";
            echo "<td>$row[nazwa].</td>";
            echo "<td>$row[opis].</td>";
            echo '<td class="cena">'."$row[cena]</td>";

        }

        mysqli_close($connect);
        ?>
        </table>
    </div>
    <div id="first-footer">
        <img src="scalak.jpg">
    </div>
    <div id="second-footer">
        <h4>Nasz sklep komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl" target="_blank">edata</a></p>
    </div>
    <div id="third-footer">
        <p>zadzwoń: 601 602 603</p>
    </div>
    <div id="fourth-footer">
        <p>Strone wykonał: Krzysztof Król</p>
    </div>
</body>
</html>