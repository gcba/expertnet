<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<ul class="list-unstyled col-md-8 col-md-offset-2 results-search-page">
<?php foreach ($rows as $id => $row): ?>
  <li class="col-md-12 img-rounded">
    <?php print $row; ?>
  </li>
<?php endforeach; ?>
</ul>