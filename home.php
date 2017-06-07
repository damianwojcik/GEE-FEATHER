<?php get_header(); ?>

<?php

    $galleries_array = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'gallery',
        )
    );

    $videos_array = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'video',
        )
    );

    $facebook_link = get_field('link_facebook', 'option');
    $instagram_link = get_field('link_instagram', 'option');
    $youtube_link = get_field('link_youtube', 'option');



?>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    <div class="container">

        <nav class="primary-nav">

            <ul>

                <?php if( have_rows('navigation_element', 'option') ): ?>

                    <ul>

                        <?php while( have_rows('navigation_element', 'option') ): the_row();
                                $icon = get_sub_field('icon');
                                $link = get_sub_field('link');
                                $jsClass = get_sub_field('js-class');
                            ?>

                            <li>
                                <a href="<?php echo $link; ?>" class="<?php echo $jsClass; ?>">
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                </a>
                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

            </ul>

        </nav><!-- /.primary-nav -->

        <div class="panes">

            <div class="pane pane-left">

                <img class="logo" src="<?= THEME_URL; ?>/assets/img/GF_Logo_G.png" alt="Logo_G">

                <h2 class="pane__heading pane__heading--blue">Grafika</h2>

            </div><!-- /.pane-left -->

            <div class="pane-left-wrap">

                <ul class="secondary-nav" id="categories-gallery">

                    <?php foreach($galleries_array as $gallery){ ?>
                        <li><a href="#" data-filter=".<?php echo slugify($gallery->post_title); ?>"><?php echo $gallery->post_title; ?></a></li>
                    <?php } ?>

                </ul>

                <div class="inner-wrap">

                    <ul class="gallery" id="list-gallery">

                    <?php foreach($galleries_array as $gallery){

                        $images = get_field('gallery', $gallery->ID);

                        if( $images ) {

                            foreach ($images as $image){ ?>

                                <li class="<?php echo slugify($gallery->post_title); ?>">
                                    <a href="<?php echo $image['url']; ?>" rel="lightbox">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    </a>
                                </li>

                                <?php } //end foreach image
                            } //end if images
                        } // end foreach gallery
                    ?>
                    </ul>

                </div><!-- /.inner-wrap-->

            </div><!-- /.pane-left-wrap -->

            <div class="form">

                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?>

            </div><!-- /.form -->

            <div class="pane pane-right">

                <img class="logo" src="<?= THEME_URL; ?>/assets/img/GF_Logo_F.png" alt="Logo_F">

                <h2 class="pane__heading pane__heading--pink">Film</h2>

            </div><!-- /.pane-right -->

            <div class="pane-right-wrap">

                <ul class="secondary-nav" id="categories-videos">

                    <?php foreach($videos_array as $videos){ ?>
                        <li><a href="#" data-filter=".<?php echo slugify($videos->post_title); ?>"><?php echo $videos->post_title; ?></a></li>
                    <?php } ?>

                </ul>

                <div class="inner-wrap">

                    <ul class="videos" id="list-videos">

                        <?php foreach($videos_array as $videos) {

                        if (have_rows('movie', $videos->ID)): ?>

                            <?php while (have_rows('movie', $videos->ID)): the_row(); ?>

                                <li class="<?php echo slugify($videos->post_title); ?>">
                                    <iframe allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" src="<?php the_sub_field('link'); ?>"></iframe>
                                </li>

                            <?php endwhile; ?>

                        <?php endif;

                        }//end foreach ?>

                    </ul>

                </div><!-- /.inner-wrap-->

            </div><!-- /.pane-right-wrap -->

        </div><!-- /.panes -->

        <div class="row row-logo">

            <img class="logo-sign" src="<?= THEME_URL; ?>/assets/img/GF.png" alt="GF">

        </div><!-- /.row-logo -->

    </div><!-- /.container -->

    <div class="container container-mobile">

        <!-- 320 px content -->

    </div><!-- /.container-mobile -->

    <div class="form-wrapper">
        <div class="container">

            <button class="btn btn-close" type="button">&times;</button>

        </div>
    </div>

<?php get_footer(); ?>