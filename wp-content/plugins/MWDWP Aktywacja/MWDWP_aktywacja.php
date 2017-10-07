<?php

/* 
 Plugin Name: MWDWP Aktywacja do WP
 Description: Wtyczka do aktywacji czegos i usuwajaca ja przy dezaktywacji do WP
 Version: 1.0
 Author: Aleksander Dudek
 Author URI: http://aleksanderdudek.biz
 Plugin URI: http://aleksanderdudek.biz
 License: GPL
  */

function mwdwp_aktywacja_add_menu() {
    add_menu_page('MWDWP aktywacja','MWDWP aktywacja','administrator','mwdwp-aktywacja-glowna','mwdwp_aktywacja_glowna','',24);
}

add_action('admin_menu', 'mwdwp_aktywacja_add_menu');

function mwdwp_aktywacja_glowna() {
    //echo "Opis jakis na wstep";
    
    if(isset($_POST["mwdwp_aktywacja"]))
    {
        $opcja = esc_sql($_POST["mwdwp_aktywacja"]);
        update_option("mwdwp_aktywacja", $opcja);
    }
    
    $opcja = get_option("mwdwp_aktywacja");
    ?>

<form method="POST">
    <input type="text" name="mwdwp_aktywacja" value="<?= $opcja ?>" />
    <input type="submit" value="Zapisz" />
</form>

<?php
    
}

register_activation_hook(__FILE__, "mwdwp_aktywacja_activation");

function mwdwp_aktywacja_activation() {
    if(!get_option("mwdwp_aktywacja")) {
        add_option("mwdwp_aktywacja", "Przykladowa opcja");
    }
    register_uninstall_hook(__FILE__, "mwdwp_aktywacja_uninstall");
}

register_deactivation_hook(__FILE__, "mwdwp_aktywacja_deactivation");

function mwdwp_aktywacja_deactivation ()
{
    update_option("mwdwp_aktywacja", "Dezaktywacja");
}

function mwdwp_aktywacja_uninstall (){
    delete_option("mwdwp_aktywacja");
}
