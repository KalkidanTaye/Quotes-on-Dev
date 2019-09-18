jQuery(document).ready(function(){
         (function( $ ) {
            $('.show-button').on('click', function(event) {
               event.preventDefault();
               //  $('p').remove();
               $.ajax({
                  method: 'get',
                  url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1' ,
                  beforeSend: function(xhr) {
                     xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
                  }
               }).done( function(response) {
                  // $('.author').remove();
                  //   console.log(response)
                  //  console.log('Success! Comments are closed for this post.');
                  $('.quote').append(response[0].content.rendered); 
                  $('.author').append(response[0].title.rendered); 
               });
            });
         })( jQuery );



         (function( $ ) {
            $('.wpcf7-submit').on('click', function(event) {
               event.preventDefault();
               // console.log("hello");
               const data = {
                  title: $( ".wpcf7-validates-as-required" ).val(),
                  content: $( ".wpcf7-textarea" ).val(),
                  _qod_quote_source: $( ".wpcf7-text" ).val(),
                  _qod_quote_source_url: $( ".wpcf7-text" ).val(),
                  post_status: 'pending'
               };
               // console.log(data);
               $.ajax({
                  method: 'post',
                  url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1' ,
                  data,
                  beforeSend: function(xhr) {
                  xhr.setRequestHeader('X-WP-Nonce', red_vars.nonce);
                  }
               });
            });
         })( jQuery );
});
