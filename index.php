<?php
echo '<!DOCTYPE html>';
echo '<html lang="nl">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>' . "Islam en het Belang van Gebed" . '</title>';
echo '    <link rel="stylesheet" href="styles.css">';
echo '</head>';
echo '<body>';
echo '    <main>';
echo '        <section class="content">';
echo '            <h1>' . "Islam, Zuilen en het belang van gebed" . '</h1>';
echo '            <ul>';

$sections = [
    [
        "title" => "Inleiding tot Islam",
        "content" => "De islam, een belangrijke wereldreligie, benadrukt het geloof in één God (Allah) en volgt de leer van de profeet Mohammed zoals overgebracht in de Koran. Centraal in de islam staan de vijf zuilen, die de basis vormen van het geloof en de praktijk van een moslim. Deze zuilen zijn Shahada (geloofsbelijdenis), Salah (gebed), Zakat (aalmoes), Sawm (vasten) en Hajj (bedevaart naar Mekka)."
    ],
    [
        "title" => "Shahada (Geloofsbelijdenis)",
        "content" => "De eerste zuil, Shahada, is de geloofsbelijdenis, waarmee de eenheid van Allah en het profeetschap van Mohammed wordt bevestigd. Deze eenvoudige maar diepgaande uitspraak is het toegangspunt tot het islamitische geloof en moet met overtuiging worden uitgesproken."
    ],
    [
        "title" => "Salah (Gebed)",
        "content" => "Salah, de tweede zuil, verwijst naar de rituele gebeden die moslims vijf keer per dag verrichten. Deze gebeden zijn een directe verbinding tussen de gelovige en Allah. De voorgeschreven tijden voor Salah zijn bij zonsopgang (Fajr), middag (Dhuhr), namiddag (Asr), zonsondergang (Maghrib) en avond (Isha). Elk gebed bestaat uit een reeks bewegingen en recitaties uit de Koran, bekend als Rak'ahs. Salah is verplicht voor alle volwassen moslims en dient als een constante herinnering aan de aanwezigheid van Allah in hun leven."
    ],
    [
        "title" => "Zakat (Aalmoes)",
        "content" => "Zakat, de derde zuil, is een vorm van aalmoes en sociale welzijn. Het vereist dat moslims een deel van hun rijkdom, meestal 2,5%, aan de behoeftigen geven. Deze praktijk zuivert iemands rijkdom en helpt om economische ongelijkheid binnen de moslimgemeenschap te verminderen."
    ],
    [
        "title" => "Sawm (Vasten)",
        "content" => "De vierde zuil, Sawm, houdt in dat er gedurende de maand Ramadan wordt gevast. Van zonsopgang tot zonsondergang onthouden moslims zich van eten, drinken, roken en huwelijksrelaties. Dit vasten is een middel tot geestelijke discipline, zelfbeheersing en empathie voor de minderbedeelden. Het culmineert in de viering van Eid al-Fitr, een feest dat het einde van de Ramadan markeert."
    ],
    [
        "title" => "Hajj (Bedevaart)",
        "content" => "De vijfde zuil, Hajj, is de bedevaart naar Mekka die elke moslim ten minste eenmaal in zijn leven moet ondernemen als hij fysiek en financieel in staat is. De bedevaart vindt plaats tijdens de islamitische maand Dhu al-Hijjah en omvat een reeks rituelen die in en rond Mekka worden uitgevoerd, ter herdenking van de daden van de profeet Abraham en zijn familie. Hajj symboliseert de eenheid van de islamitische ummah (gemeenschap) en hun onderwerping aan Allah."
    ],
    [
        "title" => "Het belang van gebed (Salah)",
        "content" => "Van deze zuilen heeft Salah een speciale betekenis vanwege de frequentie en de intieme aard van de aanbidding. Het belang van gebed in de islam kan niet worden overschat. Het is een middel om een constante verbinding met Allah te onderhouden, leiding te zoeken en dankbaarheid te uiten. De fysieke handelingen die bij Salah betrokken zijn, zoals buigen en knielen, symboliseren de onderwerping en nederigheid van de aanbidder voor de Schepper."
    ],
    [
        "title" => "Conclusie",
        "content" => "Kortom, de islam biedt door middel van zijn vijf zuilen een uitgebreide structuur voor aanbidding en ethisch gedrag. Salah, als een van deze zuilen, is bijzonder betekenisvol vanwege de frequente observatie en de rol ervan in het bevorderen van een diepe en continue relatie met Allah. Door zich aan de voorgeschreven gebedstijden te houden, cultiveren moslims een gedisciplineerd, mindful en spiritueel verrijkt leven."
    ]
];

foreach ($sections as $section) {
    echo '<li>';
    echo '<h2>' . $section['title'] . '</h2>';
    echo '<p>' . $section['content'] . '</p>';
    echo '</li>';
}

echo '<li>';
echo '<p>';
echo 'Er zijn verschillende bronnen voor gebedstijden zoals <a href="https://islamguide.eu/gebedstijden-in-amsterdam/">gebedstijden in Amsterdam</a>, <a href="https://islamguide.eu/gebedstijden-rotterdam/">gebedstijden in Rotterdam</a>, <a href="https://islamguide.eu/gebedstijden-den-haag/">gebedstijden in Den Haag</a>, <a href="https://islamguide.eu/gebedstijden-breda/">gebedstijden in Breda</a>, en nog veel meer op islamguide.eu/gebedstijden.
Check ook <a href="https://onderzoeker.islamicdocent.workers.dev/">islamic onderzoek</a>, <a href="https://islamicdocent.github.io/islamitisch/">islamic docent</a>, <a href="https://islamicdocent-alisaroba-eaa26eb289da03c48db302292c9a9a33e49a44f.gitlab.io/">islamic knowledge</a>, <a href="https://docentfinal.vercel.app/">docentfinal</a>, <a href="https://main--docentislam.netlify.app/">islamitisch science</a>, <a href="https://storage.googleapis.com/islamicdocent/islam.html">google citation</a>, <a href="https://islamitisch-wetenschap.web.app/">islamitische leerar</a> en <a href="https://f003.backblazeb2.com/file/islamitischedocent/islamcom.html">islamitische kennis</a>.';
echo '</p>';
echo '</li>';
echo '<li>';
echo '<p>';
echo 'Graag ook checken <a href="https://docs.google.com/spreadsheets/d/1bDxaZpsXQa_3E1NHOlh_D5Mkdk9-DX-0ldJRC57C_J4/edit?pli=1&gid=0#gid=0">useful links</a>';
echo '</p>';
echo '</li>';
echo '            </ul>';
echo '        </section>';
echo '    </main>';
echo '</body>';
echo '</html>';
?>
