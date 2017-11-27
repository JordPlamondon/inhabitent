(function ($) {
  
  $( '#search-button' ).on('click', function(e) {
    e.preventDefault();
  
   $( '.search-field' ).toggle().focus();
  
  });
  
  $( '.search-field' ).on('blur', function(){
    $( '.search-field' ).toggle();
  });
  
})(jQuery);
