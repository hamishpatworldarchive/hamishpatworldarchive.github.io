<?php
  // The definition of the possible uses for a smiley.
  $PHORUM_MOD_SMILEY_USES = array(
      0   => "V",
      1   => "O",
      2   => "VO",
  );
?>
<html>
  <head>
    <title>Hymiצ ohje</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/smileys/help/help.css"/>
  </head>
  <body>
    <h2>Neuvoja hymiצiden kהyttצצn</h2>

    Tהmה forum mahdollistaa hymiצiden kהytצn. Tavallisista ascii 
    merkeistה muodostetut merkkijonot nהytetההn viestiה luettaessa
    kuvina. Allaoleva taulukko nהyttהה kaikki kהytettהvissה olevat 
    hymiצt. "Kהyttצ" sarake ilmoittaa missה viestinosissa voit 
    kהyttהה hymiצtה (O = otsikko, V = viesti, VO = molemmissa).
    <br/><br/>
    <table cellspacing="1" width="100%">
    <tr>
      <th class="PhorumAdminTableHead">Hymiצ</th>
      <th class="PhorumAdminTableHead">Kuva</th>
      <th class="PhorumAdminTableHead">Kuvaus</th>
      <th class="PhorumAdminTableHead">Kהyttצ</th>
    </tr>
    <?php include("./mods/smileys/help/render_smileys_list.php") ?>
    </table>

    <br/><br/><br/>
  </body>
</html>
