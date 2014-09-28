<?php foreach ($items as $item) : ?>
<a target="_blank" href="<?php print $element['#object']->field_url_portfolio['und'][0]['value']; ?>">
	<?php print render($item); ?>
</a>
<?php endforeach; ?>
