<?php 

if(!function_exists('fwpt_custom_theme_options_menu')):
    function fwpt_custom_theme_options_menu(){
        add_menu_page('Ajustes del Tema','Ajustes del Tema','administrator','custom_theme_options','fwpt_custom_theme_options_menu_form','dashicons-admin-generic',20);
}

endif;

add_action('admin_menu','fwpt_custom_theme_options_menu');

if(!function_exists('fwpt_custom_theme_options_form')):
    function fwpt_custom_theme_options_menu_form(){
?>

        <div class="wrap">
            <h1><?php _e('Ajustes y Opciones del Tema','fwpt');?></h1>
            <form action="options.php" method='post'>
                <?php 
                settings_fields('fwpt_options_group');
                do_settings_sections('fwpt_options_group');
                ;?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope='row'>Texto del Footer</th>
                        <td>
                            <input type='text' name='fwpt_footer_text' value="<?php echo esc_attr(get_option('fwpt_footer_text'));?>">
                        </td>
                    </tr>
                </table>
                <?php submit_button();?>
            </form>
        </div>
<?php
       
}
endif;

if(!function_exists('fwpt_custom_theme_options_register')):
    function fwpt_custom_theme_options_register(){
    //Un registro por cada opcion del tema que vaya creando
        register_setting('fwpt_options_group','fwpt_footer_text');
    }
endif;

add_action('admin_init','fwpt_custom_theme_options_register');
?>