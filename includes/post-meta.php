<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', __( 'Theme Options' ) )
  ->add_fields( array(
      Field::make( 'text', 'brand_name', 'Brand Name' ),
  ));
}