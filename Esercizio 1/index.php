<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>
    <h1><?php

$giorniSettimana = [
    'Sunday' => 'Domenica',
    'Monday' => 'Lunedì',
    'Tuesday' => 'Martedì',
    'Wednesday' => 'Mercoledì',
    'Thursday' => 'Giovedì',
    'Friday' => 'Venerdì',
    'Saturday' => 'Sabato'
];

$mesi = [
    'January' => 'gennaio',
    'February' => 'febbraio',
    'March' => 'marzo',
    'April' => 'aprile',
    'May' => 'maggio',
    'June' => 'giugno',
    'July' => 'luglio',
    'August' => 'agosto',
    'September' => 'settembre',
    'October' => 'ottobre',
    'November' => 'novembre',
    'December' => 'dicembre'
];

$oggi = getdate();

$dataDiOggi = 'Oggi è ' . $giorniSettimana[$oggi['weekday']] . ', ' . $oggi['mday'] . ' ' . $mesi[$oggi['month']] . ' ' . $oggi['year'];

echo $dataDiOggi;

    ?></h1>
</body>
</html>