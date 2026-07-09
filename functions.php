<?php 

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'font-awesome-cdn',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css',
        [],
        '7.0.1'
    );
});

?>