(function() {
  /** (inicio) Prueba Typeahead */

  $('.js-search-input').on('input', function() {
    $(this).siblings('.js-typeahead').show();
  });

  $('.js-search-input').on('blur', function() {
    $(this).siblings('.js-typeahead').hide();
  });

  /** (fin) Prueba Typeahead */
})();
