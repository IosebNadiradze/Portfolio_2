<!-- 
    
Template Name: Featured_Works  

-->


<?php
$second_section = get_field('second_section');
$content_title = $second_section['content_title'];
$content_description = $second_section['content_description'];
$content_list = $second_section['content_list'];
$images = $second_section['images'];
$buttons = $second_section['buttons'];

get_header();
?>

<main class="featured-works-page">
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
</main>




<?php
get_footer();