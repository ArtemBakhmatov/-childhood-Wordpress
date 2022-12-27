<?php
    /*
        Template Name: Наша история
    */
?>

<?php 
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('aboutus_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle_first'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_descr_first'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('aboutus_img_first'); ?>" alt="about_1">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('aboutus_img_second'); ?>" alt="about_2">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle_second'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_descr_second'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle_three'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_descr_three'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('aboutus_img_three'); ?>" alt="about_3">
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>