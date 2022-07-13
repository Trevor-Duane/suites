<?php

// Load Redux extensions

if(!function_exists('redux_register_custom_extension_loader')) :
    function redux_register_custom_extension_loader($ReduxFramework) {

        $path    = dirname( __FILE__ ) . '/extensions/';
            $folders = scandir( $path, 1 );
            foreach ( $folders as $folder ) {
                if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
                    continue;
                }
                $extension_class = 'ReduxFramework_Extension_' . $folder;
                if ( ! class_exists( $extension_class ) ) {

                    $class_file = $path . $folder .'/'. $folder . '.php';
                    $class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
                    if ( $class_file ) {
                        require_once( $class_file );
                    }

                }
                if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
                    $ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
                }
            }
    }


    $opt_name = 'zante_settings';
    add_action("redux/extensions/{$opt_name}/before", 'redux_register_custom_extension_loader', 0);

endif;
