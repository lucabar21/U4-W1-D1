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
]
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2</title>
</head>
<body>
<ul>
<?php 
foreach($squadre_serieA as $squadre => $formazioni) { ?>
<li>
    <?= $squadre ?>
    <ul><?php
    foreach ($formazioni as $giocatori) { ?>
<li><?= $giocatori ?></li> <?php
    } ?>

    </ul>
</li><?php
} ?>
</ul>
</body>
</html>