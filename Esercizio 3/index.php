<?php
$squadre_serieA = [
    'Inter' => ['Sommer','Bisseck','Acerbi','Bastoni','Darmian','Barella','Calhanoglu','Mkhitaryan','Dimarco','Lautaro','Thuram'],
    'Milan' => ['Maignan', 'Florenzi', 'Gabbia', 'Tomori', 'Hernandez T.', 'Reijnders', 'Bennacer', 'Pulisic', 'Loftus-Cheek', 'Rafael Leao', 'Giroud'],
    'Juventus' => ['Szczesny','Gatti','Bremer','Danilo','Cambiaso','Mckennie','Locatelli','Rabiot','Kostic','Vlahovic','Chiesa'],
    'Bologna' => ['Skorupski', 'Posch', 'Lucumi', 'Calafiori', 'Kristiansen', 'Freuler', 'Orsolini', 'Fabbian', 'Ferguson', 'Ndoye', 'Zirkzee'],
    'Roma' => ['Svilar', 'Karsdorp', 'Mancini', 'NDicka', 'Angelino', 'Cristante', 'Paredes', 'Pellegrini Lo.', 'Baldanzi', 'Lukaku', 'El Shaarawy'],
    'Atalanta' => ['Carnesecchi','Toloi','Djimsiti','Hien','Hateboer','Pasalic','Ederson D.s.','Ruggeri','Koopmeiners','Lookman','Scamacca'],
    'Napoli' => ['Meret','Di Lorenzo', 'Rrahmani', 'Juan Jesus', 'Mario Rui', 'Zambo Anguissa', 'Lobotka', 'Zielinski', 'Politano', 'Osimhen', 'Kvaratskhelia'],
    'Lazio' => ['Provedel','Patric','Romagnoli','Gila','Lazzari','Guendouzi','Rovella','Marusic','Felipe Anderson','Luis Alberto','Castellanos'],
    'Torino' => ['Milinkovic-Savic V.', 'Tameze', 'Buongiorno', 'Rodriguez R.', 'Bellanova', 'Linetty', 'Ricci S.', 'Lazaro', 'Vlasic', 'Zapata D.', 'Sanabria'],
    'Fiorentina' => ['Terracciano', 'Dodo', 'Milenkovic', 'Martinez Quarta', 'Biraghi', 'Arthur Melo', 'Bonaventura', 'Gonzalez N.', 'Beltran L.', 'Sottil', 'Belotti'],
    'Monza' => ['Di Gregorio', 'Birindelli', 'Izzo', 'Mari', 'Carboni A.', 'Pessina', 'Gagliardini', 'Carboni V.', 'Colpani', 'Zerbin', 'Djuric'],
    'Genoa'=> ['Martinez Jo.', 'De Winter', 'Bani', 'Vasquez', 'Sabelli', 'Frendrup', 'Badelj', 'Messias', 'Spence', 'Gudmundsson A.', 'Retegui'],
    'Cagliari' => ['Scuffet', 'Wieteska','Mina', 'Dossena','Zappa','Sulemana I.','Makoumbou', 'Gaetano','Augello', 'Luvumbo', 'Shomurodov'],
    'Lecce' => ['Falcone', 'Gendrey', 'Baschirotto', 'Pongracic', 'Gallo', 'Almqvist', 'Blin', 'Ramadani', 'Dorgu', 'Piccoli', 'Banda'],
    'Udinese' => ['Okoye', 'Perez N.', 'Bijol', 'Kristensen T.', 'Pereyra', 'Samardzic', 'Walace', 'Zarraga', 'Kamara H.', 'Thauvin', 'Lucca'],
    'Empoli' => ['Caprile', 'Bereszynski', 'Walukiewicz', 'Luperto', 'Gyasi', 'Zurkowski', 'Marin', 'Maleh', 'Pezzella Giu.', 'Niang', 'Cambiaghi'],
    'Verona' => ['Montipo', 'Centonze', 'Dawidowicz', 'Magnani', 'Cabal', 'Duda', 'Folorunsho', 'Suslov', 'Bonazzoli', 'Lazovic', 'Noslin'],
    'Frosinone' => ['Turati', 'Lirola', 'Okoli', 'Romagnoli S.', 'Zortea', 'Mazzitelli', 'Barrenechea', 'Brescianini', 'Soule', 'Cheddira', 'Reinier'],
    'Sassuolo'=> ['Consigli', 'Toljan', 'Erlic', 'Ferrari G.', 'Doig', 'Boloca', 'Matheus Henrique', 'Defrel', 'Thorstvedt', 'Lauriente', 'Pinamonti'],
    'Salernitana' => ['Costil', 'Pierozzi', 'Manolas', 'Pirola', 'Bradaric', 'Gomis I.', 'Coulibaly L.', 'Maggiore', 'Candreva', 'Ikwuemesi', 'Tchaouna']
];

$scontri = [];
foreach($squadre_serieA as $squadra1 => $giocatori1) {
    foreach($squadre_serieA as $squadra2 => $giocatori2) {
        if($squadra1 != $squadra2) {
            $scontri[] = ['squadra1' => $squadra1, 'giocatori1' => $giocatori1, 'squadra2' => $squadra2, 'giocatori2' => $giocatori2];
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Esercizio 3</title>
</head>
<body>
    <h1>Scontri Serie A</h1>
    <?php foreach ($scontri as $scontro): ?>
        <h2><?php echo $scontro['squadra1'] ?> vs <?php echo $scontro['squadra2'] ?></h2>
        <ul>
            <li><?php echo $scontro['squadra1'] ?>: <?php echo implode(', ', $scontro['giocatori1']) ?></li>
            <li><?php echo $scontro['squadra2'] ?>: <?php echo implode(', ', $scontro['giocatori2']) ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
