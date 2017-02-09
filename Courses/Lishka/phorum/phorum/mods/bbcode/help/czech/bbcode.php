<html>
  <head>
    <title>BBcode nבpovלda</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/help.css"/>
  </head>
  <body>
    <h2>BBcode nבpovלda</h2>

    BBcode je zkratka pro "Bulletin Board code". Jednב se o jazyk se znaky, kter‎ mשe b‎t pouit pro fףrum
		k formבtovבnם zprבv. Tato nבpovלda popisuje, jak mשe b‎t BBCode uםvבno  v tomto fףru.

    <h3>Tuטn‎ text: [b]...[/b]<br/>
        Podtren‎ text: [u]...[/u]<br/>
        Kurzםva: [i]...[/i]<br/>
        Pרekrtnut‎ text: [s]...[/s]<br/>
        </h3>

		Tyto znaטky mשete pouםt ke zmלne stylu טבstם textu.
    Pרםklady:<br/><br/>
    <tt>
    [b]Tento text je tuטn‎[/b]<br/>
    [i]Tento text je kurzםvou[/i]<br/>
    [u]Tento text je podtren‎[/u]<br/>
    [s]Tento text je pרekrtnut‎[/s]<br/>
    [b][i]Tento text[/i] je [s]kombinovan‎[/s] kombinovan‎[/b]
    </tt><br/><br/>
    Pרםklad se zobrazם takto:<br/><br/>
    <b>Tento text je tuטn‎</b><br/>
    <i>Tento text je kurzםvou</i><br/>
    <u>Tento text je podtren‎</u><br/>
    <strike>Tento text je pרekrtnut‎</strike><br/>
    <b><i>Tento text</i> je <strike>kombinovan‎</strike> kombinovan‎</b>


    <h3>Hornם index: [sup]...[/sup]<br/>Dolnם index: [sub]...[/sub] </h3>
    Pouitםm tלchto znaטek se טבst textu zobrazם jako index.
    "2<sup>4</sup> = 16" or "H<sub>2</sub>O". Pרםklad:<br/><br/>
    <tt>
    [sup]Hornם index[/sup] normבlnם [sub]dolnם index[/sub]
    </tt><br/><br/>

		Pרםklad se zobrazם takto:<br/><br/>
    <sup>Hornם index</sup> normבlnם <sub>dolnם index</sub>

    <h3>Barva pםsma: [color=...]...[/color]</h3>
		Tato znaטka se mשe pouםt pro barevnי odlienם טבstם textu.
    Barva musם b‎t ve tvaru platnיm pro jazyk HTML (napר. "blue", "red",
    "#ff0000", "#888", etc.). Pרםklad:<br/><br/>
    <tt>
    Kdo by se obבval
    <nobr>[color=red]טervenי[/color],</nobr>
    <nobr>[color=#eeaa00]lutי[/color]</nobr> a
    <nobr>[color=#30f]modrי[/color]?</nobr>
    </tt><br/><br/>
		Pרםklad se zobrazם takto:<br/><br/>
    Kdo by se obבval
    <span style="color: red">טervenי</span>,
    <span style="color: #eeaa00">lutי</span> a
    <span style="color: #30F">modrי</span>?

    <h3>Velikost pםsma: [size=...]...[/size]</h3>
		Tato znaטka se mשe pouםt pro zmלnu velikosti pםsma טבstם textu.
    Velikost musם b‎t ve tvaru platnיm pro jazyk HTML (napר. "12px",
    "small", "large", etc.). Pרםklad:<br/><br/>
    <tt>
    <nobr>[size=x-small]To[/size]</nobr>
    <nobr>[size=small]vypadב[/size]</nobr>
    <nobr>[size=medium]jako,[/size]</nobr>
    <nobr>[size=large]e[/size]</nobr>
    <nobr>[size=x-large]rostu![/size]</nobr>
    </tt><br/><br/>
    Pרםklad se zobrazם takto:<br/><br/>
    <span style="font-size: x-small">To</span>
    <span style="font-size: small">vypadב</span>
    <span style="font-size: medium">jako,</span>
    <span style="font-size: large">e</span>
    <span style="font-size: x-large">rostu!</span>

    <h3>Centrovan‎ text: [center]...[/center]</h3>
    Znaטka se mשe pouםt pro vycentrovבnם טבstם textu.
		Pרםklad:<br/><br/>
    <tt>
    [center]Jsem rבd uprostרed toho veho[/center]
    </tt><br/><br/>
    Pרםklad se zobrazם takto:<br/><br/>
    <center>Jsem rבd uprostרed toho veho</center>

    <h3>Odkaz na obrבzek: [img]...[/img]<br/>
        Odkaz na strבnku: [url]...[/url] or [url=...]...[/url]<br/>
        Odkaz na emailovou adresu [email]...[/email]</h3>
    Tytro znaטky jsou pro odkazy na zdroje z internetu.
		Zde jsou nלjakי pרםklady:<br/><br/>
    <tt>
    [img]http://www.somesite.com/cool/thumbsup.gif[/img]<br/>
    [url]http://www.phorum.org[/url]<br/>
    [url=http://www.phorum.org]Navtivte Phorum.org![/url]<br/>
    [email]someuser@somesite.com[/email]
    </tt></br></br>
    Pרםklady se zobrazם takto:<br/><br/>
    <img src="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/thumbsup.gif" border="0"/><br/>
    [<a href="http://www.phorum.org">www.phorum.org</a>]<br/>
    <a rel="nofollow" href="http://www.phorum.org">Navtivte Phorum.org!</a><br/>
    <a href="mailto:someuser@somesite.com">someuser@somesite.com</a>

    <h3>Formבtovan‎ kףd, pםsmo se stejnou rozteטם: [code]...[/code]</h3>
    V nלkter‎ch pרםpadech jako ASCII art, programov‎ kףd, tabulky akordש, atd.,
		mשete ve zprבvל potרebovat text, kter‎ vyaduje pouitם tיto znaטky.
		Pרםklad:
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

Bez znaטky [code] dojde ke zhroucenם formבtovanיho textu, jako zde:
<br/><br/>
  _____  _                                <br/>
 |  __ \| |                               <br/>
 | |__) | |__   ___  _ __ _   _ _ __ ___  <br/>
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \ <br/>
 | |    | | | | (_) | |  | |_| | | | | | |<br/>
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|<br/>
<br/>
Se znaטkou  [code] vypadב text takto:
<pre style="border: 1px solid #dde; background-color: #ffe; padding: 0px 0px 0px 10px">
  _____  _
 |  __ \| |
 | |__) | |__   ___  _ __ _   _ _ __ ___
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
 | |    | | | | (_) | |  | |_| | | | | | |
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|

</pre>

    <h3>Uvozen‎ text: [quote]...[/quote] or [quote=...]...[/quote]</h3>
		Chcete-li pרidat uvozovky do svי zprבvy, mשete pouםt tuto znaטku.
		Muete zvolit, zda chcete ke znaטce zahrnout napרםklad takי jmיno osoby nebo ne.
		Pרםklad:<br/><br/>
    <tt>
    [quote]Phorum je nejlepם![/quote]<br/>
    [quote=Hamlet - William Shakespeare]<br/>
		B‎t טi neb‎t? To je otבzka.<br/>
		Je dשstojnלjם strpלt pomylenם,<br/>
		e nבsilnick‎ osud do nבs bije,<br/>
		nebo vzםt zbraע na moרe trבpenם,<br/>
		a tak s tםm skoncovat? Umרםt - spבt - a dost.<br/>
    [/quote]
    </tt><br/><br/>
    Takto se pרםklad zobrazם:<br/><br/>
    <blockquote class="bbcode">Quote:<div>Phorum je nejlepם!</div></blockquote>
    <blockquote class="bbcode">Quote:<div><strong>Hamlet - William Shakespeare</strong><br />
    B‎t טi neb‎t? To je otבzka.
    <br />
    Je dשstojnלjם strpלt pomylenם,
    <br />
    e nבsilnick‎ osud do nבs bije,
    <br />
    nebo vzםt zbraע na moרe trבpenם,
    <br />
    a tak s tםm skoncovat? Umרםt - spבt - a dost.
    <br /></div></blockquote>

    <h3>Horizontבlnם oddלlovacם טבra: [hr]</h3>
    K vloenם oddלlovacם טבry do zprבvy vlote znaטku [hr].
    Takto bude vypadat v‎sledek:
    <hr>
		Tato znaטka je vhodnב k rozdלlenם struktury u dlouh‎ch zprבv.

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
