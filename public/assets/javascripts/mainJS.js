$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});

$(function() {
      $( 'ul.top-nav .top-nav-left li' ).on( 'click', function() {
            $( this ).parent().find( 'li.active' ).removeClass( 'active' );
            $('.top-nav-right').find('li.active').removeClass('active');
            $( this ).addClass( 'active' );
      });
      $( 'ul.top-nav .top-nav-right li' ).on( 'click', function() {
            $( this ).parent().find( 'li.active' ).removeClass( 'active' );
            $('.top-nav-left').find('li.active').removeClass('active');
            $( this ).addClass( 'active' );
      });
});