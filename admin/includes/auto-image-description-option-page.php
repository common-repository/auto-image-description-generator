<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
<form method="post" action="options.php">
    <?php
    // This prints out all hidden setting fields
    settings_fields('gwl_autoimage_option_group');
    do_settings_sections('gwl-autoimage-settingpage');
    submit_button();
    ?>
</form>
