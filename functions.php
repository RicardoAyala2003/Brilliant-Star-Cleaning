<?php

function boilerplate_load_assets() {
  wp_enqueue_script(
    'ourmainjs',
    get_theme_file_uri('/build/index.js'),
    array('wp-element', 'react-jsx-runtime'),
    '1.0',
    true
  );

  wp_enqueue_style(
    'ourmaincss',
    get_theme_file_uri('/build/index.css'),
    array(),
    '1.0'
  );
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

add_action('rest_api_init', function () {
    register_rest_route('brilliantstar/v1', '/submit-quote', array(
        'methods' => 'POST',
        'callback' => 'brilliantstar_submit_quote',
        'permission_callback' => '__return_true'
    ));
});

function brilliantstar_submit_quote($request) {
    $data = $request->get_json_params();
    
    $to = 'info@brilliantstarcleaningservices.com';
    $subject = 'New Quote Request from ' . $data['full_name'];
    $message = "Name: " . $data['full_name'] . "\n";
    $message .= "Phone: " . $data['phone'] . "\n";
    $message .= "Email: " . $data['email'] . "\n";
    $message .= "Service: " . $data['service'] . "\n";
    $message .= "Bedrooms: " . $data['bedrooms'] . "\n";
    $message .= "Bathrooms: " . $data['bathrooms'] . "\n";
    $message .= "Last Cleaning: " . $data['last_cleaning'] . "\n";
    $message .= "Allergies: " . $data['allergies'] . "\n";
    $message .= "Notes: " . $data['notes'] . "\n";
    $message .= "Contact Method: " . $data['contact_method'] . "\n";
    
    wp_mail($to, $subject, $message);
    wp_mail($data['email'], 'Thank you for your quote request', 'We\'ll contact you shortly.');
    
    return new WP_REST_Response(['success' => true], 200);
}