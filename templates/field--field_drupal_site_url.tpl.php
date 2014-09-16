<?php foreach ($items as $item) : ?>
<a target="_blank" href="<?php print $element['#object']->field_drupal_site_url['und'][0]['value']; ?>">
	<?php print render($item); ?>
</a>
<?php endforeach; ?>
