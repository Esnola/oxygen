<?php

/*
* DESCRIPTION: 
* Simple way to add infinite scroll to your oxygen easy post module with a basic setup
*
* NOTE: 
* The easy post module Query must be set at default for this to work.
* This setup will use the auto load functionnality when the scroll threshold has been reached. 
* You can refer to the author library for more advanced feautures if you need so: https://infinite-scroll.com
*/

// Step 0
// Add the infinite scroll JS library to your page
// See install documentation: https://infinite-scroll.com/#install

// Step 1
// Add a code block just after your easy post module
// Select your code block module and change his width to 100%
// Select your easy post module, wrap it with a <DIV> and change this <DIV> ID to #my_easy_post

// Step 2
// Add this JS code to the code block:
/*
(function($) {
    if($(".blogzine-load-more-layout-4 .next").length>0){
        $('#my_easy_post .oxy-posts').infiniteScroll({
            path: '#my_easy_post .next', //the next page URL path
            append: '#my_easy_post .oxy-post', //Append and search this CSS query selector from the returned data
            history: false, //Enable the change of the page URL and browser history.
            hideNav: '#my_easy_post .oxy-easy-posts-pages', //hide the Oxygen navigation buttons
            scrollThreshold: true, // Enable auto load when reached the treshold
            status: '.page-load-status' // the rendered status
        });
    }
})(jQuery);
*/

// Step 3
// Add this PHP code to the code block:
/*
<div class="page-load-status">
  <div class="infinite-scroll-request">
    Loading ...
  </div>
  <p class="infinite-scroll-last">End of posts reached</p>
  <p class="infinite-scroll-error">An error has occurred while loading</p>
</div>
*/

// Step 4
// Add this CSS code to the code block:
/*
.page-load-status {
  display: none;
  margin-top: 60px;
  text-align: center;
  color: #777;
}
*/

// Step 5
// ENJOY :)

?>
