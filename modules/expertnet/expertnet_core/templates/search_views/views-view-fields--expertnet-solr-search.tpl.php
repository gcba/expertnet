<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="col-md-2 text-center">
    <figure>
    	<?php print $fields['field_featured_image']->content; ?><!-- needs to add class="img-circle" /fede -->
    </figure>
    <span class="label label-danger area"><?php print t($fields['type']->content); ?></span>
</div>
<div class="col-md-9 middle">
    <h3 class="gotham bold"><?php print $fields['title']->content;?></h3>
    <p class="text-muted titulo"><?php print $fields['body']->content;?></p>
    <span class="glyphicon glyphicon-tags"> <?php print $fields['field_tags']->content;?></span>
</div>
<div class="col-md-1">
    <a href="#" class="glyphicon glyphicon-chevron-right"> </a>
</div>