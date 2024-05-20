<?php
/**
* Plugin Name: dropdown
* Plugin URI: 
* Description: test
* Version: 0.1
* Author: Code Pixelz Media
* Author URI: 
**/
/* Main Plugin File */

// function for dropdown menu 

function dropdown_form() {
    ?>
    <form class="number-dropdown-form">
        <select id="number-dropdown" name="selected_number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Submit" id="submit-number" />
    </form>

    <?php
}

// Add the function to be displayed wherever you want in your WordPress theme
add_action('wp_footer', 'dropdown_form');

