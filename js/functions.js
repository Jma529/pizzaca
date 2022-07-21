
( function( $ ) {
  $('div.woocommerce').on('change', 'input.qty', function(){ $('[name=update_cart]').trigger('click');});

}( jQuery ) );