jQuery(document).ready(() => {
  jQuery('#another').on('click', function(event) {
    event.preventDefault();

    jQuery
      .ajax({
        method: 'GET',
        url:
          red_vars.rest_url +
          'wp/v2/posts?_embed=true&filter[orderby]=rand&filter[posts_per_page]=1',
        cache: false,
        data: {
          comment_status: 'closed'
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        }
      })
      .done(function(response) {
        console.log(response);
      });
  });
});
