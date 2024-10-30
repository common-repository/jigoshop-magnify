<?php
 /**
 * Plugin Name:         Jigoshop Magnify
 * Plugin URI:          http://www.chriscct7.com
 * Description:         Zoom Image on mouse hover
 * Author:              Chris Christoff
 * Author URI:          http://www.chriscct7.com
 *
 * Contributors:        chriscct7
 *
 * Version:             4.1
 * Requires at least:   3.5.0
 * Tested up to:        3.6 Beta 3
 *
 * Text Domain:         jm
 * Domain Path:         /languages/
 *
 * @category            Plugin
 * @copyright           Copyright © 2013 Chris Christoff
 * @author              Chris Christoff
 * @package             JM
 */

function jm_jigo_menu() {
	add_submenu_page( 'jigoshop','Magnify', 'Magnify', 'manage_options', 'jm-jigo-page', 'jm_jigo_page' );
}
add_action('admin_menu', 'jm_jigo_menu');

function jm_jigo_page() { ?>
	<div class="wrap">
		<h3>Magnify Options </h3>
		<form method="post" action="options.php">
            <?php settings_fields('jm_plugin_options'); ?>
<?php $options = get_option('jm_options');
?>
<table class="form-table">
<tr>
                    <th scope="row">zoomWidth</th>
                    <td>
                        <input name="jm_options[zoomWidth]" type='text' value='<?php echo $options['zoomWidth']?>'/><br /><span style="color:#666666;margin-left:2px;">The width of the zoom window in pixels.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">zoomHeight</th>
                    <td>
                        <input name="jm_options[zoomHeight]" type='text' value='<?php echo $options['zoomHeight']?>'/><br /><span style="color:#666666;margin-left:2px;">The height of the zoom window in pixels.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">position</th>
                    <td>
                        <select name='jm_options[position]'>
                            <option value='left' <?php selected('left', $options['position']); ?>>Left</option>
                <option value='right' <?php selected('right', $options['position']); ?>>Right</option>
<option value='top' <?php selected('top', $options['position']); ?>>Top</option>
<option value='bottom' <?php selected('bottom', $options['position']); ?>>Bottom</option>
</select><br /><span style="color:#666666;margin-left:2px;">Specifies the position of the zoom window relative to the small image. Allowable values are 'left', 'right', 'top', 'bottom', 'inside' or you can specifiy the id of an html element to place the zoom window in e.g. position: 'element1'</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">adjustX</th>
                    <td>
                        <input name="jm_options[adjustX]" type='text' value='<?php echo $options['adjustX']?>'/><br /><span style="color:#666666;margin-left:2px;">Allows you to fine tune the x-position of the zoom window in pixels.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">adjustY</th>
                    <td>
                        <input name="jm_options[adjustY]" type='text' value='<?php echo $options['adjustY']?>'/><br /><span style="color:#666666;margin-left:2px;">Allows you to fine tune the y-position of the zoom window in pixels.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">tint</th>
                    <td>
                        <input name="jm_options[tint]" type='text' value='<?php echo $options['tint']?>'/><br /><span style="color:#666666;margin-left:2px;">Specifies a tint colour which will cover the small image. Colours should be specified in hex format, e.g. '#aa00aa'. Does not work with softFocus.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">tintOpacity</th>
                    <td>
                        <input name="jm_options[tintOpacity]" type='text' value='<?php echo $options['tintOpacity']?>'/><br /><span style="color:#666666;margin-left:2px;">Opacity of the tint, where 0 is fully transparent, and 1 is fully opaque.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">lensOpacity</th>
                    <td>
                        <input name="jm_options[lensOpacity]" type='text' value='<?php echo $options['lensOpacity']?>'/><br /><span style="color:#666666;margin-left:2px;">Opacity of the lens mouse pointer, where 0 is fully transparent, and 1 is fully opaque. In tint and soft-focus modes, it will always be transparent.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">softFocus</th>
                    <td><select name='jm_options[softFocus]'>
                            <option value='false' <?php selected('false', $options['softFocus']); ?>>False</option>
<option value='true' <?php selected('true', $options['softFocus']); ?>>True</option></select>
                        <br /><span style="color:#666666;margin-left:2px;">Applies a subtle blur effect to the small image. Set to true or false. Does not work with tint.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">smoothMove</th>
                    <td>
                        <input name="jm_options[smoothMove]" type='text' value='<?php echo $options['smoothMove']?>'/><br /><span style="color:#666666;margin-left:2px;">Amount of smoothness/drift of the zoom image as it moves. The higher the number, the smoother/more drifty the movement will be. 1 = no smoothing.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">showTitle</th>
                    <td><select name='jm_options[showTitle]'>
                            <option value='false' <?php selected('false', $options['showTitle']); ?>>False</option>
<option value='true' <?php selected('true', $options['showTitle']); ?>>True</option></select>
                        <br /><span style="color:#666666;margin-left:2px;">Shows the title tag of the image. True or false.</span>
                    </td>
                </tr>
<tr>
                    <th scope="row">titleOpacity</th>
                    <td>
                        <input name="jm_options[titleOpacity]" type='text' value='<?php echo $options['titleOpacity']?>'/><br /><span style="color:#666666;margin-left:2px;">Specifies the opacity of the title if displayed, where 0 is fully transparent, and 1 is fully opaque.</span>
                    </td>
                </tr>
</table>
            <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
</form>
	<?php
}

function jm_get_defaults(){

    return array("zoomWidth" => "auto",
        "zoomHeight" => "auto",
        "position" => "right",
        "adjustX" => "0",
        "adjustY" => "0",
        "tint" => "false",
        "tintOpacity" => "0.5",
        "lensOpacity" => "0.5",
        "softFocus" => "false",
        "smoothMove" => "3",
        "showTitle" => "false",
        "titleOpacity" => "0.5",

    );

}
function jm_add_defaults(){
    $tmp = get_option('jm_options');
    if(($tmp['chk_default_options_db']=='1')||(!is_array($tmp))) {
        delete_option('jm_options'); // so we don't have to reset all the 'off' checkboxes too! (don't think this is needed but leave for now)
        $arr = jm_get_defaults();
        update_option('jm_options', $arr);
    }

}

function jm_delete_plugin_options(){
    delete_option('jm_options');
}

function jm_init(){
    register_setting( 'jm_plugin_options', 'jm_options', 'jm_validate_options' );
}

function jm_validate_options($input) {

    return $input;
}

function jm_enqueue_scripts(){
    if(is_product()){
        wp_enqueue_script(
            'cloud-zoom-js',
            plugins_url('/js/cloud-zoom.1.0.2.min.js', __FILE__),
            array('jquery')
        );
        wp_register_style( 'cloud-zoom-css', plugins_url('/css/cloud-zoom.css', __FILE__) );
        wp_enqueue_style( 'cloud-zoom-css' );

    }
}


function jm_head(){
    if(is_product()){
        $defaults = jm_get_defaults();
        $options = get_option('jm_options');

        $zoomWidth = ($options['zoomWidth']=="")?$defaults['zoomWidth']:$options['zoomWidth'];
        $zoomHeight = ($options['zoomHeight']=="")?$defaults['zoomHeight']:$options['zoomHeight'];
        $position = ($options['position']=="")?$defaults['position']:$options['position'];
        $adjustX = ($options['adjustX']=="")?$defaults['adjustX']:$options['adjustX'];
        $adjustY = ($options['adjustY']=="")?$defaults['adjustY']:$options['adjustY'];
        $tint = ($options['tint']=="")?$defaults['tint']:$options['tint'];
        $tintOpacity = ($options['tintOpacity']=="")?$defaults['tintOpacity']:$options['tintOpacity'];
        $lensOpacity = ($options['lensOpacity']=="")?$defaults['lensOpacity']:$options['lensOpacity'];
        $softFocus = ($options['softFocus']=="")?$defaults['softFocus']:$options['softFocus'];
        $smoothMove = ($options['smoothMove']=="")?$defaults['smoothMove']:$options['smoothMove'];
        $showTitle = ($options['showTitle']=="")?$defaults['showTitle']:$options['showTitle'];
        $titleOpacity = ($options['titleOpacity']=="")?$defaults['titleOpacity']:$options['titleOpacity'];
?>
        <script type="text/javascript">
        jQuery(document).ready(function($){
            $('a.zoom').unbind('click.fb');
            $thumbnailsContainer = $('.product .thumbnails');
            $thumbnails = $('a', $thumbnailsContainer);
            $productImages = $('.product .images>a');
            addCloudZoom = function(onWhat){

                onWhat.addClass('cloud-zoom').attr('rel', "zoomWidth:'<?php echo $zoomWidth ?>',zoomHeight: '<?php echo $zoomHeight ?>',position:'<?php echo $position ?>',adjustX:<?php echo $adjustX ?>,adjustY:<?php echo $adjustY ?>,tint:'<?php echo $tint ?>',tintOpacity:<?php echo $tintOpacity ?>,lensOpacity:<?php echo $lensOpacity ?>,softFocus:<?php echo $softFocus ?>,smoothMove:<?php echo $smoothMove ?>,showTitle:<?php echo $showTitle ?>,titleOpacity:<?php echo $titleOpacity ?>").CloudZoom();

            }
            if($thumbnails.length){
             //   $cloneProductImage = $productImages.clone(false);
               // $thumbnailsContainer.append($cloneProductImage);
                $thumbnails.bind('click',function(){
                    $image = $(this).clone(false);
                    $image.insertAfter($productImages);
                    $productImages.remove();
                    $productImages = $image;
                    $('.mousetrap').remove();
                    addCloudZoom($productImages);

                    return false;

                })

            }
            addCloudZoom($productImages);
        });
        </script>



<?php

				
			}
}

function catalog_thumbnail(){
    $return = 'shop_single';
    return $return;
}
add_filter( 'single_product_small_thumbnail_size', 'catalog_thumbnail',10,2 ) ;

function jm_add_product_thumb(){
    if(is_product()){
        return 0;
    }
}
register_activation_hook(__FILE__, 'jm_add_defaults');
register_uninstall_hook(__FILE__, 'jm_delete_plugin_options');
add_action('admin_init', 'jm_init');
add_action('wp_footer', 'jm_head',30);
add_action('wp_enqueue_scripts', 'jm_enqueue_scripts');
?>