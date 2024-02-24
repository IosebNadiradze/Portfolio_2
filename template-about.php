<!-- 
    
Template Name: About  

-->

<?php

$about_first_section = get_field('about_first_section');
$about_paragraph_1 = $about_first_section['about_paragraph_1'];
$about_paragraph_2 = $about_first_section['about_paragraph_2'];
$about_paragraph_3 = $about_first_section['about_paragraph_3'];
$about_socail_links = $about_first_section['about_social_links'];

$about_second_section = get_field('about_second_section');
$about_title = $about_second_section['about_title'];
$about_text = $about_second_section['about_text'];

$about_third_section = get_field('about_third_section');
$about_second_title = $about_third_section['about_second_title'];
$about_second_text = $about_third_section['about_second_text'];
$about_first_buttons = $about_third_section['about_first_buttons'];

$about_fourth_section = get_field('about_fourth_section');
$about_third_title = $about_fourth_section['about_third_title'];
$about_third_text = $about_fourth_section['about_third_text'];
$about_second_buttons = $about_fourth_section['about_second_buttons'];


// echo '<pre>';
// print_r($about_title);
// echo '</pre>';

get_header();
?>

<main class="about-page">
    <div class="about-first-section">
        <img class="girl-img"src="<?php echo get_template_directory_uri() . "/assets/images/girl.png"?>" alt="girl">
        <div class="about-first-section-content">
            <p class="about-secondary-title"><?php echo $about_paragraph_1; ?></p>
            <p class="about-main-title"><?php echo $about_paragraph_2; ?></p>
            <p class="about-paragraph"><?php echo $about_paragraph_3; ?></p>
            <div class="about-social-networks">
                <a href="<?php echo $about_socail_links['twitter'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/twitter.png"?>" alt="twitter">
                </a>
                <a href="<?php echo $about_socail_links['linkedin'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/linkedin.png"?>" alt="linkedin">
                </a>
                <a href="<?php echo $about_socail_links['instagram'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/instagram.png"?>" alt="instagram">
                </a>
                <a href="<?php echo $about_socail_links['behance'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/behance.png"?>" alt="behance">
                </a>
            </div>
        </div>
    </div>
    <div class="about-second-section">
        <h1 class="first-title"><?php echo $about_title; ?></h1>
        <p class="about-text"><?php echo $about_text; ?></p>
    </div>
    <div class="about-third-section">
        <h1 class="first-title"><?php echo $about_second_title; ?></h1>
        <p class="about-text"><?php echo $about_second_text; ?></p>
        <div class="about-buttons">
            <a href="<?php echo $about_first_buttons['amazon'] ?>">Amazon</a>
            <a href="<?php echo $about_first_buttons['ea_games'] ?>">EA Games</a>
            <a href="<?php echo $about_first_buttons['spotify'] ?>">Spotify</a>
            <a href="<?php echo $about_first_buttons['linkedin'] ?>">LinkedIn</a>  
        </div>
    </div>
    <div class="about-fourth-section">
        <h1 class="first-title"><?php echo $about_third_title; ?></h1>
        <p class="about-text"><?php echo $about_third_text; ?></p>
        <div class="about-buttons">
            <a href="<?php echo $about_second_buttons['figma'] ?>">Figma</a>
            <a href="<?php echo $about_second_buttons['photoshop'] ?>">Photoshop</a>
            <a href="<?php echo $about_second_buttons['illustrator'] ?>">Illustrator</a>
            <a href="<?php echo $about_second_buttons['canva'] ?>">Canva</a>
            <a href="<?php echo $about_second_buttons['trello'] ?>">Trello</a>
            <a href="<?php echo $about_second_buttons['notion'] ?>">Notion</a>  
        </div>
    </div>
</main>

<?php
get_footer();