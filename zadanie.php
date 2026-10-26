
<?php
$wybor = isset($_POST['wybor']) ? (int)$_POST['wybor'] : 0;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania - tablice PHP</title>
</head>
<body>

<h2>Wybierz zadanie (1-5)</h2>

<form method="post">
    <button type="submit" name="wybor" value="1">Zadanie 1</button>
    <button type="submit" name="wybor" value="2">Zadanie 2</button>
    <button type="submit" name="wybor" value="3">Zadanie 3</button>
    <button type="submit" name="wybor" value="4">Zadanie 4</button>
    <button type="submit" name="wybor" value="5">Zadanie 5</button>
</form>

<?php
if ($wybor == 1) {
    $tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];

    echo "<h3>Zadanie 1</h3>";
    echo "Piąta komórka: " . $tab1[4] . "<br>";

    $tab1[6] = 12;
    $tab2 = $tab1;
    $tab3 = [];

    for ($i = 0; $i < 10; $i++) {
        $tab3[$i] = $tab1[$i] + $tab2[$i];
    }

    $tab2 = array_reverse($tab1);

    echo "Tablica 1: " . implode(", ", $tab1) . "<br>";
    echo "Tablica 2 odwrotnie: " . implode(", ", $tab2) . "<br>";
    echo "Tablica 3: " . implode(", ", $tab3) . "<br>";
}
elseif ($wybor == 2) {
    echo "<h3>Zadanie 2</h3>";
    echo "Wybierz zadanie 2 po przygotowaniu formularza do wpisywania liczb.";
}
elseif ($wybor == 3) {
    echo "<h3>Zadanie 3</h3>";
    echo "Wybierz zadanie 3 po przygotowaniu formularza do wpisywania liter.";
}
elseif ($wybor == 4) {
    echo "<h3>Zadanie 4</h3>";

    $A = [];
    for ($i = 0; $i < 100; $i++) {
        $A[] = rand(1, 30);
    }

    echo "Tablica: " . implode(", ", $A) . "<br>";
    echo "Maksimum: " . max($A) . "<br>";
    echo "Liczba wystąpień maksimum: "
        . count(array_keys($A, max($A))) . "<br>";

    echo "Liczby nieparzyste: ";
    foreach ($A as $x) {
        if ($x % 2 != 0) echo $x . " ";
    }

    echo "<br>Liczby z przedziału &lt;5,15): ";
    foreach ($A as $x) {
        if ($x >= 5 && $x < 15) echo $x . " ";
    }

    rsort($A);
    echo "<br>Tablica malejąco: " . implode(", ", $A);
}
elseif ($wybor == 5) {
    echo "<h3>Zadanie 5</h3>";

    $fib = [0, 1];
    for ($i = 2; $i < 100; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    echo "Fibonacci: " . implode(", ", $fib) . "<br>";

    $potegi = [];
    for ($i = 0; $i < 100; $i++) {
        $potegi[] = pow(2, $i);
    }
    echo "Potęgi liczby 2: " . implode(", ", $potegi) . "<br>";

    $tab3 = [];
    for ($i = 1; $i <= 100; $i++) {
        $tab3[] = 3 * $i;
    }
    echo "Wielokrotności 3: " . implode(", ", $tab3) . "<br>";

    $tab2 = [];
    for ($i = 1; $i <= 100; $i++) {
        $tab2[] = pow(2, $i);
    }
    echo "Ciąg 2, 4, 8...: " . implode(", ", $tab2);
}
?>

</body>
</html>
