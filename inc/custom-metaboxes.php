<?php
function add_a_metaboxes(){

    //Parametros
    //ID para identificar el metabox
    //Titulo del metabox
    //Callback con el contenido
    //Pantalla donde se mostrara
    //Contexto donde se mostrara (normal, aside, advanced)
    //prioridad en la que se mostrara
    //Argumentos con callback

    add_meta_box('metabox-id',__('Metabox Title','fwpt'), 'callback_metaboxes',array('post','page'),'normal','high',null);
}

function callback_metaboxes(){
    echo 'Content of Metaboxes';
}
add_action('add_meta_box','add_a_metaboxes');

if(!function_exists('fwpt_metaboxes')):
    function fwpt_metaboxes($post){
        wp_nonce_field(basename(__FILE__),'fwpt_nonce');
?>
    <table class="form-table">
        <tr>
            <th class='row-title' colspan='2'>
            <p>Añade la informacion de la raza</p>
            </th>
        </tr>
        <tr>
            <th class="row-title" colspan='2'>
                <label for='mb_origen_raza'>Origen de la raza</label>
            </th>
            <td>
                <input id='mb_origen_raza' name='mb_origen_raza' class='regular-text' type='text' value="<?php echo esc_attr(get_post_meta($post->ID,'mb_origen_raza',true));?>">
            </td>
        </tr>
        <tr>
            <th class="row-title">
            <label for='mb_esperanza_vida'>Esperanza de vida</label>  
            </th>
            <td>
                <?php  $res_esperanza = esc_html(get_post_meta($post->ID,'mb_esperanza_vida',true));?>
                <select name='mb_esperanza_vida' id='mb_esperanza_vida' class='post-box'>
                    <option value='' selected>---</option>
                    <option <?php  selected($res_esperanza,'8-10');?> value ='8 a 10 años'>8 a 10 años</option>
                    <option <?php  selected($res_esperanza,'10-12');?> value ='10 a 12 años'>10 a 12 años</option>
                    <option <?php  selected($res_esperanza,'12 a 14');?> value ='12 a 14 años'>12 a 14 años</option>
                    <option <?php  selected($res_esperanza,'15 a 20');?> value ='15 a 20 años'>15 a 20 años</option>
                </select>
                    
            </td>
        </tr>
    </table>
    <?php 
    }
endif;

    if(!function_exists('fwpt_save_metaboxes')):
        function fwpt_save_metaboxes($post_id,$post,$update){
            if(!isset($POST['fwpt_nonce']) || !wp_verify_nonce($_POST['fwpt_nonce'],basename(__FILE__)))
            return $post_id;
            
            if(!current_user_can('edit_post',$post_id))
            return $post_id;

            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;
            $mb_origen_raza = $mb_esperanza_vida = '';

            if (isset($_POST['mb_origen_raza'])){
                $mb_origen_raza = sanitize_text_field($_POST['mb_origen_raza']);
                }
            update_post_meta($post_id,'mb_origen_raza',$mb_origen_raza);

            if (isset($_POST['mb_esperanza_vida'])){
                $mb_esperanza_vida = sanitize_text_field($_POST['mb_esperanza_vida']);   
                }    
            update_post_meta($post_id,'mb_esperanza_vida',$mb_esperanza_vida);
        }

    endif;

    add_action('save_post','fwpt_save_metaboxes',10,3);

    ?>