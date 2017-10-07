<?php

/* 
 Plugin Name: Moja Wtyczka do WP
 Description: Moja pierwsza wtyczka do WP
 Version: 1.0
 Author: Aleksander Dudek
 Author URI: http://aleksanderdudek.biz
 Plugin URI: http://aleksanderdudek.biz
 License: GPL
  */

function mwdwp_add_menu() {
    add_menu_page('Strona główna wtyczki','Moja pierwsza wtyczka','administrator','mwdwp-glowna','mwdwp_glowna','dashicons-editor-spellcheck',24);
}

add_action('admin_menu', 'mwdwp_add_menu');

function mwdwp_glowna() {
    ?>
<div class="wrap">
    <h1> <span class="dashicons dashicons-editor-spellcheck">
        
    </span> dowolny tekst </h1>
    <h2> Naglowek h2 </h2>
    <h3> h3 </h3>
    <h4> h4 </h4>
    <h5> h5 </h5>
    <h6> h6 </h6>
    <p>
        zwykly paragraf
    </p>
    <div class="notice notice-success">
        Komunikat sukcesu        
    </div>
     <div class="notice notice-error">
        Komunikat bledu        
    </div>
     <div class="notice notice-info">
        Komunikat informacyjny        
    </div>
     <div class="notice notice-warning">
        Komunikat ostrzezenia        
    </div>
    
    <form method="POST">
        <h3> Sekcja pierwsza </h3>
        <p> Tutaj opis sekcji </p>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="pierwsze_pole"> Pierwsze pole </label>
                    </th>
                    <td>
                        <input type="text" name="pierwsze_pole" id="pierwsze_pole" value=""
                               placeholder="dowolny tekst dodaj" />
                        <span class="description">Dodatkowe info</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="drugie_pole"> Drugie pole </label>
                    </th>
                    <td>
                        <select name="drugie_pole" id="drugie_pole">
                            <option value="opcja1">Opcja 1</option>    
                            <option value="opcja2">Opcja 2</option>    
                            <option value="opcja3">Opcja 3</option>    
                        </select> 
                          
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="button-primary" value="domyslny" />
                        <input type="submit" class="button-secondary" value="drugi" />
                        <input type="submit" class="" value="bez klasy" />
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    
    <table class="widefat">
        <thead>
            <tr>
                <th>Kolumna 1</th>
                <th>Kolumna 2</th>
                <th>Kolumna 3</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Kolumna 1</th>
                <th>Kolumna 2</th>
                <th>Kolumna 3</th>
                
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>dane 1</td>
                <td>dane 2</td>
                <td>dane 3</td>
            </tr>
            <tr>
                <td>dane 1</td>
                <td>dane 2</td>
                <td>dane 3</td>
            </tr>
            <tr>
                <td>dane 1</td>
                <td>dane 2</td>
                <td>dane 3</td>
            </tr>
        </tbody>
    </table>
    <div class="tablenav">
        <div class="tablenav-pages">
            <span class="displaying-num">Wyswietlam 1-50 </span>
            <span class="page-numbers current">1</span>
            <a href="#" class="page-numbers">2</a>
            <a href="#" class="page-numbers">3</a>
            <a href="#" class="page-numbers">4</a>
            <a href="#" class="next page-numbers">&</a>
        </div>
    </div>
    
</div>
<?php
    echo "Opis jakis na wstep";
}