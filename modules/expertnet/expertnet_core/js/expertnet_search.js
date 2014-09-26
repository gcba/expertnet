(function($) {

  Drupal.behaviors.expertnet_main_search = {
    attach: function(context, settings) {
      var $form = $('form.expertnet-main-search');
      var $search_term = $form.find('.search-text');
      var $search_opts = $form.find('.btn-group');

      if ($form.length) {
        $form.submit(function() {
          var term = $search_term.val();
          var type = $search_opts.find('input:checked').val();
          $form.attr('action', determineSearchPath(term, type));
        });

      }
    }
  };  

  function determineSearchPath(term, type, arg, argtext) {
    var path =  Drupal.settings.basePath +  'search' + '/' + type + '/' + term;
    return path;
  }

})(jQuery);