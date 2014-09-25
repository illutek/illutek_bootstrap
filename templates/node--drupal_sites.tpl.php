<!-- display van de volledige node op de frontpagina
op de lees meer pagina een view met velden (keuze verschillende weergave
dit dient nog verder uitgewerkt op 25-09-2014 -->
<div class="col-6 col-sm-4 col-lg-4">
  <div  class="drupal_sites_wrap">
      <?php print render($content['field_drupal_sites_img']);?>
      <div class="image_overlay">
        <h2 class="title_node"><?php print $title; ?></h2>
        <?php print render($content['body']);?> 
        <div class="url"><?php print render($content['field_drupal_site_url']);?></div>
      </div> 
  </div> 
</div>