<?php /*Template Name: ContactPage */


get_header();
?>

<div class="contact-me">
    <div class="contact-page">
        <div class="header-bar">
            <h1>CONTACT ME</h1>
            <div class="h1-border"></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="33" title="Contact Me Form"]'); ?>
    </div>

</div>


<?php

get_footer();

?>