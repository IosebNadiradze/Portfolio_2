<!-- 
    
Template Name: Playground  

-->

<?php

$third_section = get_field('third_section');

get_header();
?>

<main class="playground-page">
    <div class="third-container">
        <?php for($i =1; $i <= 10; $i++): ?>
            <div class="gallery-img">
                <?php if($third_section): ?>
                    <img src="<?php echo $third_section['photo_' . $i]['url']; ?>" alt="<?php echo $third_section['photo_' . $i]['alt']; ?>">
                <?php endif; ?>
            </div>
        <?php endfor; ?>
    </div>
</main>




<?php
get_footer();
