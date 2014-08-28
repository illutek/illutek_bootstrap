<?php if ($teaser): ?>
  <div class="col-6 col-sm-6 col-lg-3">
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>   
        <div class="content"<?php print $content_attributes; ?>>
          <?php
           print render($content);
          ?>
        </div>
    </div>
  </div>
<?php else: ?>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>  
      <div class="content"<?php print $content_attributes; ?>>
        <?php
         print render($content);
        ?>
      </div>
  </div>

<?php endif; ?>