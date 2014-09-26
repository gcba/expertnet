<?php
/**
 * @file
 * Provides theming for expertnet_main_search widget.
 *
 * $options - Options to provide the search upon submitting.
 */

/* This snippet is to check whether a search was done or not. */
$checked_opt = 'area'; 
$search_term = '';
if(arg(0)==='search' && !is_null(arg(2))) {
  $search_term = arg(2);
  $checked_opt = arg(1);
}
?>

<div class="row">
  <form class="form-horizontal form-search-page expertnet-main-search" role="form" action="search/area" method="post">
    <div class="col-md-5 col-md-offset-1">      
      <div class="col-sm-12">
        <div class="form-group has-feedback">
          <input class="form-control input-xl form-primary search-text" type="text" placeholder="<?php print t("Search") ?>" value="<?php print $search_term; ?>">
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-xl" data-toggle="buttons"> 
          <?php foreach ($options as $option => $label): ?>
            <label class="btn btn-default btn-xl <?php print ($option===$checked_opt) ? 'active' : ''; ?>">
              <input type="radio" name="searchOptions" value="<?php print $option; ?>" <?php print ($option===$checked_opt) ? 'checked' : ''; ?>>
              <?php print $label; ?>
            </label>
            <?php $checked = FALSE; ?>
          <?php endforeach; ?>
        </div>
      </div>                
    </div>
  </form>
</div>