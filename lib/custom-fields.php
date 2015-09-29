<?php

class GO_Fields {
  function __construct() {
    if ( function_exists( 'fm_register_submenu_page' ) ) {
        fm_register_submenu_page( 'basic_info', 'options-general.php', 'Basic Info' );
    }
    add_action( 'fm_submenu_basic_info', array( $this, 'basic_info' ) );
  }

  function basic_info() {
    $fm = new Fieldmanager_Group( array(
        'name'           => 'basic_info',
        'tabbed'         => 'horizontal',
        'children'       => array(
            'open-hours' => new Fieldmanager_Group( array(
                'label'          => __( 'Hours', 'go_fields' ),
                'label_macro' => array( __( 'Hours: %s', 'go_fields' ), 'day' ),
                'limit'          => '7',
                'add_more_label' => __( 'Add more', 'go_fields' ),
                'sortable'   => true,
                'children'       => array(
                    'day' => new Fieldmanager_Textfield( __( 'Day(s)', 'go_fields' ) ),
                    'hours' => new Fieldmanager_Textfield( 'Hours' ),
                )
            ) ),
            'address' => new Fieldmanager_Group( array(
                'label'          => 'Address',
                'children'       => array(
                    'address1' => new Fieldmanager_TextArea( 'Street 1' ),
                    'media'    => new Fieldmanager_Media( 'Media File' ),
                )
            ) ),
        )
    ) );
    $fm->activate_submenu_page();
  }
}

new GO_Fields;

?>
