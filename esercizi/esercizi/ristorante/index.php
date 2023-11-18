<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu del Ristorante</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            text-align: center;
            background: linear-gradient(to bottom, #f5f5f5, #e0e0e0);
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #e74c3c;
            margin-top: 20px;
        }
        .restaurant-name {
            font-family: 'Pacifico', cursive;
            font-size: 36px;
            color: #e74c3c;
            margin-bottom: 10px;
        }
        .menu-container {
            display: inline-block;
            text-align: left;
            background: linear-gradient(to bottom, #ffffff, #f2f2f2);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            font-family: 'Comic Sans MS', cursive;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        h2 {
            font-family: 'Pacifico', cursive;
            font-size: 28px;
            color: #3498db;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }
        .price {
            float: left;
            margin-right: 10px;
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$piatti = array(
    "Antipasti" => array(
        "tartare_di_manzo" => array("Tartare di manzo", "Deliziosa tartare di manzo condita con erbe e spezie.", "€12.50"),
        "tartare_di_tonno" => array("Tartare di tonno", "Tartare fresca di tonno, delicatamente condita e servita con una spruzzata di agrumi per un esplosione di sapori.", "€14.00"),
        "tagliere_misto" => array("Tagliere misto", "Un delizioso piatto misto con una selezione di salumi e formaggi italiani, perfetto da condividere.", "€16.00"),
        "misto_di_crudi_di_mare" => array("Misto di crudi di mare", "Delizia il palato con una selezione di prelibatezze marine crude, sapientemente unite per assaporare il meglio del mare.", "€18.50"),
    ),
    "Primi" => array(
        "Spaghetti alla Carbonara" => array("Spaghetti alla Carbonara", "Piatto romano classico con spaghetti al dente e una salsa cremosa a base di uova, formaggio, pancetta e pepe nero.", "€10.00"),
        "Cotoletta alla Milanese" => array("Cotoletta alla Milanese", "Una cotoletta di vitello impanata e fritta in stile milanese, croccante fuori e tenera dentro.", "€13.00"),
        "Risotto ai Funghi" => array("Risotto ai Funghi", "Risotto cremoso e saporito con il buonissimo sapore dei funghi, una delizia per il palato.", "€11.50"),
        "Risotto ai Frutti di Mare" => array("Risotto ai Frutti di Mare", "Un piacere per gli amanti del pesce: un risotto ricco e appagante con i sapori vari dei frutti di mare.", "€14.50"),
        "Spaghetti al Sugo" => array("Spaghetti al Sugo", "Classici spaghetti serviti con una ricca e saporita salsa a base di pomodoro, un evergreen della cucina italiana.", "€9.50"),
        "Pasta col Tonno" => array("Pasta col Tonno", "Un piatto di pasta con tonno, che unisce la ricchezza del tonno con la bontà della pasta, creando un pasto confortante.", "€12.00"),
    ),
    "Secondi" => array(
        "Bistecca alla Fiorentina" => array("Bistecca alla Fiorentina", "Una bistecca alla fiorentina, cucinata alla perfezione e ricca di sapore.", "€20.00"),
        "Filetto di Vitello" => array("Filetto di Vitello", "Tenero filetto di vitello, cucinato alla perfezione e servito con un tocco di raffinatezza.", "€18.50"),
        "Lonza di Maiale su Crema di Spinaci" => array("Lonza di Maiale su Crema di Spinaci", "Lonza di maiale succulenta servita su un letto di spinaci cremosi, un armonioso connubio di sapori e consistenze.", "€16.00"),
        "Filetto di Branzino con Contorno di Verdure" => array("Filetto di Branzino con Contorno di Verdure", "Delicato filetto di branzino, sapientemente condito e accompagnato da un contorno di verdure fresche e saporite.", "€22.00"),
    ),
    "Dolci" => array(
        "Tiramisù" => array("Tiramisù", "Un classico dolce italiano con strati di savoiardi inzuppati nel caffè e crema al mascarpone, spolverato di cacao.", "€8.00"),
        "Panna Cotta" => array("Panna Cotta", "Un dessert italiano setoso e cremoso, servito con una varietà di deliziosi condimenti.", "€7.50"),
        "Gelato" => array("Gelato", "Goditi la bontà cremosa del gelato italiano, un delizioso dessert gelato disponibile in vari gusti.", "€6.00"),
    ),
);

function stampaMenu($piatti) {
    echo '<div class="menu-container">';
    foreach ($piatti as $categoria => $listaPiatti) {
        echo '<h2>' . $categoria . '</h2>';
        echo '<ul>';
        foreach ($listaPiatti as $piattoKey => $piattoDetails) {
            $nomePiatto = $piattoDetails[0];
            $descrizione = $piattoDetails[1];
            $prezzo = $piattoDetails[2];

            echo '<li><span class="price">' . $prezzo . '</span><strong>' . $nomePiatto . '</strong><br>' . $descrizione . '</li>';
        }
        echo '</ul>';
    }
    echo '</div>';
}

?>

<h1 class="restaurant-name">La Cambusa</h1>

<?php
stampaMenu($piatti);
?>

</body>
</html>
