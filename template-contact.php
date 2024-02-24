<!-- 
    
Template Name: Contact  

-->

<?php
get_header();
?>

<main class="contact-page">
    <div class="contact-page-form">
        <?php echo do_shortcode('[contact-form-7 id="d121b54" title="Contact form 1" html_class="portfolio-contact-form"]'); ?>    
    </div>
    <div class="portfolio-social-networks">
        <a href="#">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/twitter.png"?>" alt="twitter">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/linkedin.png"?>" alt="linkedin">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/instagram.png"?>" alt="instagram">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/behance.png"?>" alt="behance">
        </a>
    </div>
</main>




<?php
get_footer();