<?php
$first_section = get_field('first_section');
$subtitle = $first_section['subtitle'];
$title = $first_section['title'];
$description = $first_section['description'];
$social_links = $first_section['social_links'];

$second_section = get_field('second_section');
$content_title = $second_section['content_title'];
$content_description = $second_section['content_description'];
$content_list = $second_section['content_list'];
$images = $second_section['images'];
$buttons = $second_section['buttons'];

$third_section = get_field('third_section');


// echo '<pre>';
// print_r($buttons);
// echo '</pre>';

get_header();

?>


<main class="home-page">

    <section class="first-section">
        <div class="first-container">
            <h2 class="secondary-title"><?php echo $subtitle ?></h2>
            <h1 class="main-title"><?php echo $title ?></h1>
            <p class="paragraph"><?php echo $description ?></p>
            <div class="social-networks">
                <?php if($social_links['twitter']): ?>
                    <a href="<?php echo $social_links['twitter'] ?>">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/twitter.png"?>" alt="twitter">
                    </a>
                <?php endif; ?>
                <?php if($social_links['linkedin']): ?>
                    <a href="<?php echo $social_links['linkedin'] ?>">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/linkedin.png"?>" alt="linkedin">
                    </a>
                <?php endif; ?>
                <?php if($social_links['instagram']): ?>
                    <a href="<?php echo $social_links['instagram'] ?>">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/instagram.png"?>" alt="instagram">
                    </a>
                <?php endif; ?>
                <?php if($social_links['behance']): ?>
                    <a href="<?php echo $social_links['behance'] ?>">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/behance.png"?>" alt="behance">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="second-section">
        <h1 class="first-title">#Featured_Works</h1>
        <div class="second-container">
            <div class="container-list">
                <?php for($i = 1; $i <= 5; $i++) : ?>
                    <div class="list-one">
                        <div class="container-content">
                            <h2 class="content-title"><?php echo $content_title; ?></h2>
                            <p class="content-description"><?php echo $content_description; ?></p>
                            <ul class="content-list">
                                <li><?php echo $content_list['first_text']; ?></li>
                                <li><?php echo $content_list['second_text']; ?></li>
                                <li><?php echo $content_list['third_text']; ?></li>
                            </ul>
                            <button class="content-button"><?php echo $buttons['button_' . $i] ?></button>
                        </div>
                        <div class="img">
                            <?php if($images): ?>
                                <img src="<?php echo $images['image_' . $i]['url']; ?>" alt="<?php echo $images['image_' . $i]['alt']; ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="third-section">
        <h1 class="second-title">#Playground</h1>
        <div class="third-container">
                <?php for($i =1; $i <= 10; $i++): ?>
                    <div class="gallery-img">
                        <?php if($third_section): ?>
                            <img src="<?php echo $third_section['photo_' . $i]['url']; ?>" alt="<?php echo $third_section['photo_' . $i]['alt']; ?>">
                        <?php endif; ?>
                    </div>
                <?php endfor; ?>
        </div>
    </section>

</main>

<?php


get_footer();

