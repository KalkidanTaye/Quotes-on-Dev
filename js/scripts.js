(function( $ ) {
    $('.show-button').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'get',
          url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1' ,
          beforeSend: function(xhr) {
             xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
          }
       }).done( function(response) {
           console.log(response)
          console.log('Success! Comments are closed for this post.');
         $('.quote').append(response[0].content.rendered); 

       });
    });
 })( jQuery );

//  console.log(red-vars)