<?php
  // The definition of the possible uses for a smiley.
  $PHORUM_MOD_SMILEY_USES = array(
      0   => "B",
      1   => "S",
      2   => "BS",
  );
?>
<html>
  <head>
    <title>Smajlםcם nבpovלda</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/smileys/help/help.css"/>
  </head>
  <body>
    <h2>Smajlםcם nבpovלda</h2>

		Na tomto fףru mשete pouםt smajlםky. Smajlםcם jsou רetלzce znakש, kterי se ve zprבvל zobrazujם jako obrבzky.
		Ty se pouםvajם pro vyjבdרenם nבlady autora pרםspלvku. V tabulce dole jsou vechny dostupnי smajlםky. Ve sloupci "Kde"
		je popis, kde je monי smajlםk pouםt (S = subjekt zprבvy, B = tלlo zprבvy, BS = vude).	
    <br/><br/>
    <table cellspacing="1" width="100%">
    <tr>
      <th class="PhorumAdminTableHead">Smajlםk</th>
      <th class="PhorumAdminTableHead">Obrבzek</th>
      <th class="PhorumAdminTableHead">Popis</th>
      <th class="PhorumAdminTableHead">Kde</th>
    </tr>
    <?php include("./mods/smileys/help/render_smileys_list.php") ?>
    </table>

    <br/><br/><br/>
  </body>
</html>
