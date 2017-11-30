(function($) {
  
  console.log('loaded');

 $( "#search-submit" ).on('click', function(e) {
   e.preventDefault();
   $( ".search-field" ).toggle().focus();
   $(document).keypress(function(){
      if(event.which == 13){
        
      if($(".search-field").val() != ''){
        $( ".search-form" ).submit();
      }
         
    }
   });
 });
 $( ".search-field" ).on('blur', function(){
   $( ".search-field" ).toggle();
 });
 })(jQuery);


