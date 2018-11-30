<?php
require 'api_translate.php';

echo "
# Google Translate with Command Line
 _____________________________________________________________________________________________
|                                                                                             |
|  Afrikaans : af   |  Irish : ga       |  Arabic : ar                   |  Japanese : ja     |
|  Albanian : sq    |  Italian : it     |  Azerbaijani : az              |  Canada : kn       |
|  Basque : eu      |  Korean : ko      |  Bengali : bn                  |  Latin : la        |
|  Belarusian : be  |  Latvian : lv     |  Bulgarian : bg                |  Lithuanian : lt   |
|  Catalan: ca      |  Macedonian : mk  |  Chinese Simplified : zh-CN    |  Malay : ms        |
|  Maltese : mt     |  Croatian : hr    |  Chinese Traditional : zh-TW   |  Norwegian: no     |
|  Czech : cs       |  Persian : fa     |  Danish : da                   |  Polish : pl       |
|  Dutch : nl       |  Portuguese: pt   |  English : en                  |  Romanian : ro     |
|  Esperanto: eo    |  Russian : ru     |  Estonian : et                 |  Serbian : sr      |
|  Filipino : tl    |  Slovak : sk      |  Finnish : fi                  |  Slovenian : sl    |
|  French : fr      |  Spanish : es     |  Galician : gl                 |  Swahili : sw      |
|  Georgian : ka    |  Swedish : sv     |  German : de                   |  Tamil : ta        |
|  Greek : el       |  Telugu : te      |  Gujarati : gu                 |  Thai : th         |
|  Haitian : ht	    |  Turkish : tr     |  Hebrew : iw                   |  Ukrainian : uk    |
|  Hindi : hi       |  Urdu : ur        |  Hungarian : hu                |  Vietnamese : vi   |
|  Icelandia : is   |  Welsh : cy       |  Indonesian : in               |  Yiddish : yi      |
|                                                                                             |
|  Auto Detect : auto                                                                         |
|_____________________________________________________________________________________________|
\n";

$a = new Google_Translate();
$a->from = question("From Language : ");
$a->to = question("To Language : ");
$a->word = question("Word : ");
echo "# Result : ".$a->translate()."\n";