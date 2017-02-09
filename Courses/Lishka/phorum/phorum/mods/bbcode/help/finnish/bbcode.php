<html>
  <head>
    <title>BBcode ohje</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/help.css"/>
  </head>
  <body>
    <h2>BBcode ohje</h2>

    BBCode on lyhennys sanoista Bulletin Board code. Se on kuvauskieli
    mitה forumin kהyttהjהt voivat kהyttהה viestiensה muotoiluun. Tהmה
    ohje kertoo mitה BB koodeja tהssה Forumissa voi kהyttהה.

    <h3>Lihavoitu teksti: [b]...[/b]<br/>
        Alleviivattu teksti: [u]...[/u]<br/>
        Kursivoitu teksti: [i]...[/i]<br/>
        Yliviivattu teksti: [s]...[/s]<br/>
        </h3>
    Kהyttהmהllה nהitה elementtejה voit vaikuttaa tekstin muotoiluun.
    Esimerkiksi:<br/><br/>
    <tt>
    [b]Tהmה teksti on lihavoitu[/b]<br/>
    [u]Tהmה teksti on alleviivattu[/u]<br/>
    [i]Tהmה teksti on kursivoitu[/i]<br/>
    [s]Tהmה teksti on yliviivattu[/s]<br/>
    [b][i]Tהssה tekstissה[/i] on [s]usiampia[/s] useampia[/b] tyylejה
    </tt><br/><br/>
    Ne nהyttהvהt tהltה:<br/><br/>
    <b>Tהmה teksti on lihavoitu</b><br/>
    <u>Tהmה teksti on alleviivattu</u><br/>
    <i>Tהmה teksti on kursivoitu</i><br/>
    <strike>Tהmה teksti on yliviivattu</strike><br/>
    <b><i>Tהssה tekstissה</i> on <strike>usiampia</strike> useampia</b> tyylejה


    <h3>Ylהviite: [sup]...[/sup]<br/>Alaviite: [sub]...[/sub] </h3>
    Kהyttהmהllה nהitה elementtejה voit kהyttהה ylה- tai alaviitteitה.
    Nהmה elementit ovat hyצdyllisiה kהyttהessהsi esimerkiksi
    "2<sup>4</sup> = 16" tai "H<sub>2</sub>O". esimerkki:<br/><br/>
    <tt>
    [sup]ylהviite[/sup] tavallinen [sub]alaviite[/sub]
    </tt><br/><br/>
    Tהmה nהyttהה tהltה:<br/><br/>
    <sup>ylהviite</sup> tavallinen <sub>alaviite</sub>

    <h3>Kirjasin vהri: [color=...]...[/color]</h3>
    Tהmה elementti mahdollistaa tekstin tai sen osan vהrjההmisen.
    Vהrin tהytyy olla oikea HTML vהrikoodi (kuten "blue", "red",
    "#ff0000", "#888", jne.). Esimerkiksi:<br/><br/>
    <tt>
    Kuka pelkהה
    <nobr>[color=red]punaista[/color],</nobr>
    <nobr>[color=#eeaa00]keltaista[/color]</nobr> ja
    <nobr>[color=#30f]sinistה[/color]?</nobr>
    </tt><br/><br/>
    Tהmה nהyttהה tהltה:<br/><br/>
    Kuka pelkהה
    <span style="color: #FF3300">punaista</span>,
    <span style="color: #eeaa00">keltaista</span> ja
    <span style="color: #3300FF">sinistה</span>?

    <h3>Kirjasin koko: [size=...]...[/size]</h3>
    Tהmה elementti mahdollistaa tekstin koon muuttamisen.
    Koon pitהה olla oikea HTML koko elementin mukainen (kuten "12px",
    "small", "large", jne.). Esimerkiksi:<br/><br/>
    <tt>
    <nobr>[size=x-small]Nהyttהה[/size]</nobr>
    <nobr>[size=small]siltה[/size]</nobr>
    <nobr>[size=medium]ettה[/size]</nobr>
    <nobr>[size=large]kasvan[/size]</nobr>
    <nobr>[size=x-large]suuremmaksi![/size]</nobr>
    </tt><br/><br/>
    Ja se nהyttהה tהltה:<br/><br/>
    <span style="font-size: x-small">Nהyttהה</span>
    <span style="font-size: small">siltה</span>
    <span style="font-size: medium">ettה</span>
    <span style="font-size: large">kasvan</span>
    <span style="font-size: x-large">suuremmaksi!</span>

    <h3>Tekstin keskitys: [center]...[/center]</h3>
    Tהmה elementti mahdollistaa tekstin keskittהmisen sivulla.
    Esimerkiksi:<br/><br/>
    <tt>
    [center]Olen selkeהsti kaiken keskellה[/center]
    </tt><br/><br/>
    Mikה nהyttהה tהltה:<br/><br/>
    <center>Olen selkeהsti kaiken keskellה</center>

    <h3>Liitה kuva muualta netistה: [img]...[/img]<br/>
        Lisהה nettisivun osoite: [url]...[/url] or [url=...]...[/url]<br/>
        Lisהה sהhkצpostiosoite [email]...[/email]</h3>
    Nהillה elementeillה mההritellההn linkkejה muihin netin osoitteisiin.
    Tהssה muutama esimerkki:<br/><br/>
    <tt>
    [img]http://www.somesite.com/cool/thumbsup.gif[/img]<br/>
    [url]http://www.phorum.org[/url]<br/>
    [url=http://www.phorum.org]Vierailu Phorum.orgissa![/url]<br/>
    [email]someuser@somesite.com[/email]
    </tt></br></br>
    Mikה nהyttהה tהltה:<br/><br/>
    <img src="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/thumbsup.gif" border="0"/><br/>
    [<a href="http://www.phorum.org">www.phorum.org</a>]<br/>
    <a rel="nofollow" href="http://www.phorum.org">Vieraile Phorum.orgissa!</a><br/>
    <a href="mailto:someuser@somesite.com">someuser@somesite.com</a>

    <h3>Vakiomittainen, muotoiltu koodi: [code]...[/code]</h3>
    Voi olla ettה joskus haluat liittה viestiin ASCII kuvia,
    ohjelmakoodin pהtkiה, tabulatuureja jne. Nהissה tapauksissa
    voit kהyttהה [code] elementtiה. Esimerkki:
<pre>
[code]
 _____  _
|  __ \| |
| |__) | |__   ___  _ __ _   _ _ __ ___
|  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
| |    | | | | (_) | |  | |_| | | | | | |
|_|    |_| |_|\___/|_|   \__,_|_| |_| |_|
[/code]
</pre>

ilman ympהrצivהה [code] elementtiה, tהmה nהyttהisi kהsittהmהttצmהltה kuten:
<br/><br/>
  _____  _                                <br/>
 |  __ \| |                               <br/>
 | |__) | |__   ___  _ __ _   _ _ __ ___  <br/>
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \ <br/>
 | |    | | | | (_) | |  | |_| | | | | | |<br/>
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|<br/>
<br/>
Mutta [code] sen ympהrillה, se nהyttהה tהltה:
<pre style="border: 1px solid #dde; background-color: #ffe; padding: 0px 0px 0px 10px">
  _____  _
 |  __ \| |
 | |__) | |__   ___  _ __ _   _ _ __ ___
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
 | |    | | | | (_) | |  | |_| | | | | | |
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|

</pre>

    <h3>Lainattu teksti: [quote]...[/quote] tai [quote=...]...[/quote]</h3>
    Jos haluat nהyttהה lainauksen viestissהsi voit kהyttהה tהtה
    elementtiה. Voit valita nהytetההnkצ lainaamasi henkilצn nimeה
    tai tunnusta. Esimerkki:<br/><br/>
    <tt>
    [quote]Phorum on paras![/quote]<br/>
    [quote=William Shakespearen Hamletista]<br/>
    To be or not to be, --that is the question:--<br/>
    Whether 'tis nobler in the mind to suffer<br/>
    The slings and arrows of outrageous fortune<br/>
    Or to take arms against a sea of troubles,<br/>
    And by opposing end them?<br/>
    [/quote]
    </tt><br/><br/>
    Nהkyy nהin:<br/><br/>
    <blockquote class="bbcode">Quote:<div>Phorum on paras!</div></blockquote>
    <blockquote class="bbcode">Quote:<div><strong>William Shakespearen Hamletista</strong><br />
    To be or not to be, --that is the question:--
    <br />
    Whether 'tis nobler in the mind to suffer
    <br />
    The slings and arrows of outrageous fortune
    <br />
    Or to take arms against a sea of troubles,
    <br />
    And by opposing end them?
    <br /></div></blockquote>

    <h3>Lisהה vaakaviiva: [hr]</h3>
    Lisהtהksesi erottavan vaakaviivan voit kהyttהה [hr] elementtiה.
    Se nהyttהה tהltה:
    <hr>
    Kהytה esimerkiksi pitkien viestien jaksottamiseen ja jהsentהmiseen.

    <h3>Itemized list:<br/>[list]<br/>[*] item 1<br/>[*] item 2<br/>[/list]</h3>


    The [list] tag can be used for adding lists of items to your message.
    By default, the list items will be shown using bullets in front of
    them. By assigning one of "1" (numbers), "a" (letters), "A" (capital
    letters), "i" (Roman numbers) or "I" (Roman capital numbers), the
    bullet type can be changed. Examples:<br/><br/>
    <tt>
    [list]<br/>
    [*] item 1<br/>
    [*] item 2<br/>
    [list]<br/>
    [list=A]<br/>
    [*] another item 1<br/>
    [*] another item 2<br/>
    [/list]<br/>
    </tt><br/><br/>
    These will be displayed as:<br/><br/>
    <ul><li>item 1</li><li>item 2</li></ul>
    <ol type="A"><li>another item 1</li><li>another item 2</li></ol>

    <br/><br/><br/><br/>
  </body>
</html>
