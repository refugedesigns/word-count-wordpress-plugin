<?php

/**
 * Plugin Name: First Plugin
 * Description: This plugin helps count the number of words and characters in a post
 * Version: 1.0
 * Author: Erasmus
 * Author URL: http://github.com/refugedesigns
 */

class FirstPlugin {

    public function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action('admin_menu', [$this, 'optionsPage']);
    }

    public function OptionsPage() {
        add_options_page('Word Count Settings', "Word Count", 'manage_options', 'word-count-settings', [$this, 'adminPageHTML']);
    }

    public function adminPageHTML() { ?>
       <div class='wrap'><h1>Word Count Settings</h1></div>;
    <?php }
}

new FirstPlugin();