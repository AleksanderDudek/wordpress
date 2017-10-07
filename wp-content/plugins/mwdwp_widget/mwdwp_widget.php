<?php

/* 
 Plugin Name: Mój Widget do WP
 Description: Mój pierwszy widget do WP
 Version: 1.0
 Author: Aleksander Dudek
 Author URI: http://aleksanderdudek.biz
 Plugin URI: http://aleksanderdudek.biz
 License: GPL
  */

class mwdwp_Widget extends WP_Widget {
    function __construct() {
        $widget_ops = [
            'classname' => "mwdwp_Widget",
            'description' => 'Klasa tworzaca widget'
        ];
        parent::__construct("mwdwp_Widget", "mwdwp_Widget", $widget_ops);
    }
    
    function form($instance) {
        $default = array("tekst" => "Jakis tekst");
        $instance = wp_parse_args((array) $instance,$default);
        $tekst = $instance['tekst'];
        ?>
<p>
    <label>Twoj tekst</label>
    <input type="text" name="<?= $this->get_field_name('tekst');?>" 
           value="<?= esc_attr($tekst);?>"/> 
</p>
<?php
        
    }
    
    function update($new_instance, $old_instance) {
        $instance=$old_instance;
        $instance['tekst'] = strip_tags( $new_instance['tekst']);
        return $instance;
        }
        
    function widget($args, $instance) {
        echo $args["before_widget"];
        if(!empty($instance['tekst']))
        {
            echo $instance['tekst'];
        }
        echo $args["after_widget"];
        }
}

function mwdwp_add_widget(){
    register_widget("mwdwp_Widget");
}

add_action("widgets_init", "mwdwp_add_widget");