<?php

    function custom_settings_add_menu() {
        add_menu_page( 'Custom Settings', 'Paramètres', 'manage_options',
            'custom-settings', 'custom_settings_page', null, 99);
    }

    add_action('admin_menu', 'custom_settings_add_menu' );

    function custom_settings_page() { ?>

        <div class="wrap">
            <h1>Paramètres</h1>
            <form action="options.php" method="post">
                <?php
                    settings_fields('section');
                    do_settings_sections('theme-options');
                    submit_button();
                ?>

            </form>
        </div>

    <?php }

    function setting_paypal() { ?>
        <input type="email" name="setting_paypal" id="setting_paypal"
               value="<?php echo get_option('setting_paypal');?>"/>
    <?php }

    function setting_facebook() { ?>
        <input type="text" name="facebook" id="facebook"
               value="<?php echo get_option('facebook');?>"/>
    <?php }
    function setting_instagram() { ?>
        <input type="text" name="instagram" id="instagram"
               value="<?php echo get_option('instagram');?>"/>
    <?php }

    function setting_twitter() { ?>
        <input type="text" name="twitter" id="twitter"
               value="<?php echo get_option('twitter');?>"/>
    <?php }

    function setting_google() { ?>
        <input type="text" name="google" id="google"
               value="<?php echo get_option('google');?>"/>
    <?php }

    function setting_phone() { ?>
        <input type="text" name="setting_phone" id="setting_phone"
               value="<?php echo get_option('setting_phone');?>"/>
    <?php }

    function setting_adress() { ?>
        <input type="text" style="width:100%;" name="setting_adress" id="setting_adress"
               value="<?php echo get_option('setting_adress');?>"/>
    <?php }

    function setting_description() { ?>
        <textarea type="text" style="width: 100%;"name="setting_description" id="setting_description"><?php echo get_option('setting_description');?></textarea>
    <?php }

    function setting_googlemap() { ?>
        <textarea type="text" style="width:100%;height: 150px;" name="setting_googlemap" id="setting_googlemap"><?php echo get_option('setting_googlemap');?></textarea>
    <?php }

    function custom_settings_page_setup() {
        add_settings_section('section', '', null, 'theme-options');
        add_settings_field('setting_paypal', 'Adresse Paypal', 'setting_paypal', 'theme-options', 'section');
        add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
        add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
        add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
        add_settings_field('google', 'Google URL', 'setting_google', 'theme-options', 'section');
        add_settings_field('setting_phone', 'Numéro de téléphone', 'setting_phone', 'theme-options', 'section');
        add_settings_field('setting_adress', 'Adresse', 'setting_adress', 'theme-options', 'section');
        add_settings_field('setting_googlemap', 'Iframe Google Map', 'setting_googlemap', 'theme-options', 'section');

        register_setting('section', 'setting_paypal');
        register_setting('section', 'setting_phone');
        register_setting('section', 'setting_adress');
        register_setting('section', 'setting_googlemap');
        register_setting('section', 'facebook');
        register_setting('section', 'twitter');
        register_setting('section', 'instagram');
        register_setting('section', 'google');

    }

    add_action( 'admin_init', 'custom_settings_page_setup');