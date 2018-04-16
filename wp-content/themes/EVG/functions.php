<?php
  function wpb_custom_new_menu() {
    register_nav_menu('custom-menu',__( 'Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );