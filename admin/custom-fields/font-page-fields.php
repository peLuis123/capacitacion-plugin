<?php
/**
 *
 */
/**
 * este metabox ya no se usa pero se toma como ejemplo para la creacion de los demas metabox
 */
if( !function_exists('front_page_banner_metabox')){
    add_action( 'cmb2_admin_init', 'front_page_banner_metabox' );
    function front_page_banner_metabox() {
        $prefix = 'banner_metabox_';
        $banner_metabox = new_cmb2_box( array(
            'id'            => $prefix.'id',
            'title'         => esc_html__( 'Banner', 'capacitacion-lugin' ),
            'object_types'  => array( 'page' ,'post'),
            'context'       => 'normal',
            'show_names'    => true,
        ) );
        $banner_metabox->add_field( array(
            'name'       => esc_html__( 'Titulo del Banner', 'capacitacion-lugin' ),
            'id'         => $prefix.'title',
            'type'       => 'text',
        ) );
        $banner_metabox->add_field( array(
            'name'       => esc_html__( 'Descripcion del Banner', 'capacitacion-lugin' ),
            'id'         => $prefix.'descripcion',
            'type'       => 'text',

        ) );

    }
}
/**
 * En este Metabox iran todos los campos que se deseen agregar para el banner
 */
if( !function_exists ( 'banner_repeatable_metabox' ) ) {

    add_action( 'cmb2_admin_init', 'banner_repeatable_metabox' );

    function banner_repeatable_metabox() {
        $prefix='banner_repeatable_';
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix.'id',
            'title'        => esc_html__( 'Campos repetibles para el banner', 'cmb2' ),
            'object_types' => array( 'page' ),
        ) );
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix.'group',
            'type'        => 'group',
            'description' => esc_html__( 'estos repetibles son para el banner', 'cmb2' ),
            'options'     => array(
                'group_title'    => esc_html__( 'Entry {#}', 'cmb2' ),
                'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
                'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
                'sortable'       => true,
            ),
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name'       => esc_html__( 'insertar titulo', 'cmb2' ),
            'id'         => 'title',
            'type'       => 'text',
        ) );



        $cmb_group -> add_group_field (  $group_field_id, array(
            'name'        => esc_html__( 'Description', 'cmb2' ),
            'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
            'id'          => 'description',
            'type'        => 'textarea_small',
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image', 'cmb2' ),
            'id'   => 'background-banner1',
            'type' => 'file',
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name'       => esc_html__( 'insertar texto botton 1', 'cmb2' ),
            'id'         => 'Service',
            'type'       => 'text',
        ) );


        $cmb_group -> add_group_field( $group_field_id, array(
            'name' => esc_html__( 'Service URL', 'cmb2' ),
            'desc' => esc_html__( 'ingresa el url donde quieres redirigir', 'cmb2' ),
            'id'   => 'buttonService',
            'type' => 'text_url',

        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name'       => esc_html__( 'insertar texto botton 2', 'cmb2' ),
            'id'         => 'About',
            'type'       => 'text',
        ) );



        $cmb_group -> add_group_field( $group_field_id, array(
            'name' => esc_html__( 'About URL', 'cmb2' ),
            'desc' => esc_html__( 'ingresa el url donde quieres redirigir', 'cmb2' ),
            'id'   => 'buttonAbout',
            'type' => 'text_url',

        ) );

    }

}
/**
 * En este Metabox iran los campos repetables para la seccion de Features
 */
if( !function_exists ( 'custom_repeatable_metabox' ) ) {

    add_action( 'cmb2_admin_init', 'custom_repeatable_metabox' );
    function custom_repeatable_metabox() {
        $prefix='custom_repeatable_';
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix.'id',
            'title'        => esc_html__( 'campo repetible para features', 'cmb2' ),
            'object_types' => array( 'page' ),
        ) );
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix.'group',
            'type'        => 'group',
            'description' => esc_html__( 'Generates items repetibles', 'cmb2' ),
            'options'     => array(
                'group_title'    => esc_html__( 'Entry {#}', 'cmb2' ),
                'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
                'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
                'sortable'       => true,
            ),
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name'       => esc_html__( 'insertar titulo', 'cmb2' ),
            'id'         => 'title',
            'type'       => 'text',
        ) );

        $cmb_group -> add_group_field (  $group_field_id, array(
            'name'        => esc_html__( 'Description', 'cmb2' ),
            'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
            'id'          => 'description',
            'type'        => 'textarea_small',
        ) );

        $cmb_group->add_field( array(
            'name'       => esc_html__( 'Titulo de Features', 'cmb2' ),
            'id'         => $prefix.'title-features',
            'type'       => 'text',
        ) );
        $cmb_group->add_field( array(
            'name'       => esc_html__( 'descripcion de Features', 'cmb2' ),
            'id'         => $prefix.'descripcion-features',
            'type'       => 'text',
        ) );


    }

}

/**
 * En este Metabox iran los campos repetables para la seccion de About Us
 */

 if( !function_exists ( 'about_repeatable_metabox' ) ) {

    add_action( 'cmb2_admin_init', 'about_repeatable_metabox' );
    function about_repeatable_metabox() {
        $prefix='about_repeatable_';
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix.'id',
            'title'        => esc_html__( 'campo repetible para about', 'cmb2' ),
            'object_types' => array( 'page' ),
        ) );
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix.'group',
            'type'        => 'group',
            'description' => esc_html__( 'Generates items repetibles para about', 'cmb2' ),
            'options'     => array(
                'group_title'    => esc_html__( 'Entry {#}', 'cmb2' ),
                'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
                'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
                'sortable'       => true,
            ),
        ) );
        $cmb_group->add_field( array(
            'name'       => esc_html__( 'Titulo de about', 'cmb2' ),
            'id'         => $prefix.'title-about',
            'type'       => 'text',
        ) );
        $cmb_group->add_field( array(
            'name'       => esc_html__( 'descripcion de about', 'cmb2' ),
            'id'         => $prefix.'descripcion-about',
            'type'       => 'text',
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name'       => esc_html__( 'insertar item', 'cmb2' ),
            'id'         => 'item',
            'type'       => 'text',
        ) );
        $cmb_group -> add_field ( array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image 470*470', 'cmb2' ),
            'id'   => 'about1',
            'type' => 'file',
        ) );
        $cmb_group -> add_field ( array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image 287 * 244', 'cmb2' ),
            'id'   => 'about2',
            'type' => 'file',
        ) );
        $cmb_group -> add_field ( array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image 311 * 133', 'cmb2' ),
            'id'   => 'about3',
            'type' => 'file',
        ) );

        $cmb_group -> add_field ( array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image 311 * 133', 'cmb2' ),
            'id'   => 'imageAbout1',
            'type' => 'file',
        ) );
        $cmb_group -> add_field ( array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image 55 * 55', 'cmb2' ),
            'id'   => 'imageAbout2',
            'type' => 'file',
        ) );






    }

}

/**
 * En este metabox iran los campos para la seccion de servicios
 */

 if( !function_exists ( 'services_repeatable_metabox' ) ) {

    add_action( 'cmb2_admin_init', 'services_repeatable_metabox' );

    function services_repeatable_metabox() {
        $prefix='services_repeatable_';
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix.'id',
            'title'        => esc_html__( 'Campos repetibles para el services', 'cmb2' ),
            'object_types' => array( 'page' ),
        ) );
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix.'group',
            'type'        => 'group',
            'description' => esc_html__( 'estos repetibles son para el services', 'cmb2' ),
            'options'     => array(
                'group_title'    => esc_html__( 'Entry {#}', 'cmb2' ),
                'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
                'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
                'sortable'       => true,
                'repeatable_max' => 3,
            ),
        ) );

        $cmb_group->add_field( array(
            'name'       => esc_html__( 'Titulo de Services', 'cmb2' ),
            'description' => esc_html__( 'escriba el titulo principal para servicios', 'cmb2' ),
            'id'         => $prefix.'title-services',
            'type'       => 'text',
        ) );
        $cmb_group->add_field( array(
            'name'       => esc_html__( 'Titulo de Services', 'cmb2' ),
            'description' => esc_html__( 'escriba la descripcion principal para servicios', 'cmb2' ),
            'id'         => $prefix.'descripcion-services',
            'type'       => 'text',
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name'       => esc_html__( 'insertar titulo', 'cmb2' ),
            'id'         => 'title-service',
            'description' => esc_html__( 'escriba un titulo para el servicio', 'cmb2' ),
            'type'       => 'text',
        ) );
        $cmb_group -> add_group_field (  $group_field_id, array(
            'name'        => esc_html__( 'Description', 'cmb2' ),
            'description' => esc_html__( 'escriba una descripcion para el servicio', 'cmb2' ),
            'id'          => 'description-service',
            'type'        => 'textarea_small',
        ) );

        $cmb_group -> add_group_field ( $group_field_id, array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your image', 'cmb2' ),
            'id'   => 'background',
            'type' => 'file',
        ) );
        $cmb_group -> add_group_field ( $group_field_id, array(
            'name' => esc_html__( 'Imagen', 'cmb2' ),
            'desc' => esc_html__( 'Upload your icon', 'cmb2' ),
            'id'   => 'icon',
            'type' => 'file',
        ) );






    }

}

?>