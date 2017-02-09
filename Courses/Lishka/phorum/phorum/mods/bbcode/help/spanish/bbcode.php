<html>
  <head>
    <title>Ayuda BBCode</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/help.css"/>
  </head>
  <body>
    <h2>Informaciףn BBcode</h2>

    BBCode es una abreviatura de Bulletin Board Code. Es un lenguaje
	de marcado usado en foros para dar formato a los mensajes. Esta
	pבgina de ayuda describe cףmo puede usarse el BBCode en este foro.

    <h3>Negrita: [b]...[/b]<br/>
        Subrayado: [u]...[/u]<br/>
        Cursiva: [i]...[/i]<br/>
        Tachado: [s]...[/s]<br/>
        </h3>

	Usando estas etiquetas, puedes aplicar estilo a fragmentos de texto.
	Ejemplos:
    <br/><br/>
    <tt>
    [b]Texto en negrita[/b]<br/>
    [u]Texto subrayado[/u]<br/>
    [i]Texto en cursiva[/i]<br/>
    [s]Texto tachado[/s]<br/>
    [b][i]Texto[/i] con [s]varias[/s] opciones[/b]
    </tt><br/><br/>


	Aparecerבn como:<br/><br/>
    <b>Texto en negrita</b><br/>
    <i>Texto en cursiva</i><br/>
    <u>Texto subrayado</u><br/>
    <strike>Texto tachado</strike><br/>
    <b><i>Texto</i> con <strike>varias</strike> opciones</b>


    <h3>Superםndice: [sup]...[/sup]<br/>Subםndice: [sub]...[/sub] </h3>
    Usando estas etiquetas, puedes marcar un fragmento de texto como
	superםndice o subםndice. Esto es תtil para cosas como
    "2<sup>4</sup> = 16" o "H<sub>2</sub>O". Ejemplo:<br/><br/>
    <tt>
    [sup]superםncide[/sup] normal [sub]subםndice[/sub]
    </tt><br/><br/>
    Esto aparecerב como :<br/><br/>
    <sup>superםndice</sup> normal <sub>subםndice</sub>

    <h3>Color de la fuente: [color=...]...[/color]</h3>
	Esta etiqueta se utiliza para aplicar un color al texto.
	El color tiene que ser un cףdigo de color HTML vבlido (como "blue", "red",
    "#ff0000", "#888", etc.). Ejemplo:<br/><br/>
    <tt>
    Quien tiene miedo del
    <nobr>[color=red]rojo[/color],</nobr>
    <nobr>[color=#eeaa00]amarillo[/color]</nobr> y
    <nobr>[color=#30f]azul[/color]?</nobr>
    </tt><br/><br/>
    Aparecerב como:<br/><br/>
    Quiיn tiene miedo del
    <span style="color: red">rojo</span>,
    <span style="color: #eeaa00">amarillo</span> y
    <span style="color: #30F">azul</span>?

    <h3>Tamaסo de fuente: [size=...]...[/size]</h3>

	Esta etiqueta se usa para cambiar el tamaסo del texto.
	El tamaסo tiene que ser una indicaciףn vבlida en HTML (como "12px",
    "small", "large", etc.). Ejemplo:<br/><br/>
    <tt>
    <nobr>[size=x-small]Parece[/size]</nobr>
    <nobr>[size=small]que[/size]</nobr>
    <nobr>[size=medium]estoy[/size]</nobr>
    <nobr>[size=large]creciendo[/size]</nobr>
    <nobr>[size=x-large]mucho![/size]</nobr>
    </tt><br/><br/>
    Se mostrarב como:<br/><br/>
    <span style="font-size: x-small">Parece</span>
    <span style="font-size: small">que</span>
    <span style="font-size: medium">estoy</span>
    <span style="font-size: large">creciendo</span>
    <span style="font-size: x-large">mucho!</span>

    <h3>Centrado: [center]...[/center]</h3>
    Puedes usar esta etiqueta para centrar el texto en pantalla.
	Ejemplo:<br/><br/>
    <tt>
    [center]Estoy justo en el centro[/center]
    </tt><br/><br/>
    Aparecerב como:<br/><br/>
    <center>Estoy justo en el centro</center>

    <h3>Enlazar una imagen de la web: [img]...[/img]<br/>
        Enlazar a otra pבgina: [url]...[/url] or [url=...]...[/url]<br/>
        Enlazar a una direcciףn de correo: [email]...[/email]</h3>

	Estas son etiquetas para enlazar a otros recursos.
	Estos son algunos ejemplos: <br/><br/>
    <tt>
    [img]http://www.somesite.com/cool/thumbsup.gif[/img]<br/>
    [url]http://www.phorum.org[/url]<br/>
    [url=http://www.phorum.org]Visit Phorum.org![/url]<br/>
    [email]someuser@somesite.com[/email]
    </tt></br></br>
    Aparecerב como:<br/><br/>
    <img src="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/thumbsup.gif" border="0"/><br/>
    [<a href="http://www.phorum.org">www.phorum.org</a>]<br/>
    <a rel="nofollow" href="http://www.phorum.org">Visit Phorum.org!</a><br/>
    <a href="mailto:someuser@somesite.com">someuser@somesite.com</a>

    <h3>Texto monoespaciado, preformateado: [code]...[/code]</h3>
    En ocasiones puedes llegar a utilizar cosas como arte ASCII,
	cףdigo de programaciףn, tabulaciones de guitarra... para incluirlos
	en el mensaje. Para esos casos, puedes usar la etiqueta [code]. Ejemplo:
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

Sin la etiqueta [code], aparecerםa totalmente desordenado como esto:
<br/><br/>
  _____  _                                <br/>
 |  __ \| |                               <br/>
 | |__) | |__   ___  _ __ _   _ _ __ ___  <br/>
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \ <br/>
 | |    | | | | (_) | |  | |_| | | | | | |<br/>
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|<br/>
<br>

Pero si le aplicamos la etiqueta [code], nos quedarב asם:
<pre style="border: 1px solid #dde; background-color: #ffe; padding: 0px 0px 0px 10px">
  _____  _
 |  __ \| |
 | |__) | |__   ___  _ __ _   _ _ __ ___
 |  ___/| '_ \ / _ \| '__| | | | '_ ` _ \
 | |    | | | | (_) | |  | |_| | | | | | |
 |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|

</pre>

    <h3>Citas textuales: [quote]...[/quote] or [quote=...]...[/quote]</h3>
	Si quieres citar a alguien en tu mensaje, puedes usar esta etiqueta.
	Puedes elegir si incluir el nombre de la persona a la que citas o no.
	Ejemplos:
    <br/><br/>
    <tt>
    [quote]Phorum es lo mejor![/quote]<br/>
    [quote=De Hamlet, por William Shakespeare]<br/>
    Ser o no ser, esa es la cuestiףn<br/>
	[/quote]
    </tt><br/><br/>
    Aparecerב como:<br/><br/>
    <blockquote class="bbcode">Cita:<div>Phorum es lo mejor!</div></blockquote>
    <blockquote class="bbcode">Cita:<div><strong>De Hamlet, por William Shakespeare</strong><br />
     Ser o no ser, esa es la cuestiףn</div></blockquote>

    <h3>Aסadir una linea horizontal de separaciףn: [hr]</h3>
    Para aסadir una linea horizontal de separaciףn, puedes usar [hr].
    Aparecerב como:
    <hr>
	Esto es תtil para estructurar mensajes largos.

    <h3>Itemized list: [list] [*] item 1 [*] item 2 [/list]</h3>

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
