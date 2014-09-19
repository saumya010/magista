<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Magista
 */

get_header(); ?>
<section id="style-switcher" style="left: -120px;">
    <h2>Style Switcher <a href="#"><span></span></a></h2>
    <div>
        <h3>Colors</h3>
        <ul class="colors" id="colors">
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="golden" title="Teal Green"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
        </ul>
    </div>
</section>
<div class="magista_home-slider">
    
<div class="flexslider">
  <ul class="slides">
    <li>
        <?php if ( get_theme_mod('magista_slider_image_1') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_1')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image1.jpg" /></div>
        <?php } ?>
    </li>
    <li>
        <?php if ( get_theme_mod('magista_slider_image_2') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_2')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image2.jpg" /></div>
        <?php } ?>
    <li>
        <?php if ( get_theme_mod('magista_slider_image_3') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_3')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image6.jpg" /></div>
        <?php } ?>
    <li>
        <?php if ( get_theme_mod('magista_slider_image_4') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_4')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image7.jpg" /></div>
        <?php } ?>
  </ul>
</div>
</div>
<div class="magista_features">
    <div class="container">		
        <div class="magista_feature_content">
            <div class="magista_page-title" data-scroll-reveal="enter top and move 50px over 1.33s">
                <?php if ( get_theme_mod('magista_features_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_features_title')); ?></h1>
                <?php } else {  ?> <h1><?php esc_html_e('What You Can Do With Magista?', 'magista') ?></h1>
                <?php } ?>
                <?php if ( get_theme_mod('magista_features_description') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('Magista doesn\'t miss a small feature that your business website needs. Anything you desire to create you can do it with Magista.', 'magista') ?></p>
                <?php } ?>
            </div>
            <div class="col-lg-12 col-lg-4" data-scroll-reveal="enter left over 2s">
                <div class="magista_feature_content_inner" id="feature1">
                    <div class="magista_font_icon">                        
                        <?php if (get_theme_mod('magista_features_icon_1')) { ?>
                            <i class="fa fa-<?php echo (get_theme_mod('magista_features_icon_1'));?>"></i>
                        <?php } else { ?>
                            <a href="#"><i class="info fa fa-mobile"></i></a>
                        <?php } ?>                            
                    </div>
                    <a href="#">
                        <?php if ( get_theme_mod('magista_features_title_1') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_1')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Create A Perfect Website', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_1') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_1')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('Highlight all your key business features in one page and don\'t miss any users coming on your site.', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-4" data-scroll-reveal="enter top over 2s">
                <div class="magista_feature_content_inner" id="feature2">
                    <div class="magista_font_icon">
                        <?php if ( get_theme_mod('magista_features_icon_2')) {  ?>
                            <i class="fa fa-<?php echo (get_theme_mod('magista_features_icon_2'));?>"></i>
                        <?php } else {  ?> 
                            <i class="fa-gittip fa"></i>
                        <?php } ?>                        
                    </div>
                    <a href="#">
                        <?php if ( get_theme_mod('magista_features_title_2') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_2')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Share Testimonials', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_2') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_2')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('Let users know about the feedback of your services. Share the testimonials with the visitors and gain trust.', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-4" data-scroll-reveal="enter right over 2s">
                <div class="magista_feature_content_inner" id="feature3">
                    <div class="magista_font_icon">
                        <?php if ( get_theme_mod('magista_features_icon_3')) {  ?>
                            <i class="fa fa-<?php echo (get_theme_mod('magista_features_icon_3'));?>"></i>
                        <?php } else {  ?> 
                            <i class="fa-twitter fa"></i>
                        <?php } ?>                    
                    </div>
                    <a href="#">
                        <?php if ( get_theme_mod('magista_features_title_3') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_3')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Build Social Presence', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_3') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_3')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('Invite the users to join your social networks. Place your social network links and timely update the users about the updates.', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>			
</div>
<?php if(get_theme_mod('magista_video_check')) { ?>
<div class="magista_video_section">
    <div class="magista_work-content">
        <div class="magista_inner_content">
            <div class="magista_page-title" data-scroll-reveal="after 1s, ease-in 32px and reset over .8s">
                <?php if ( get_theme_mod('magista_video_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_video_title')); ?></h1>
                <?php } else {  ?> <h1><?php esc_html_e('Take A Quick Look At Magista', 'magista') ?></h1>
                <?php } ?>
            </div>
            <div class="magista_sec-video" data-scroll-reveal="after 1s, ease-in 32px and reset over .8s">
                <?php if ( get_theme_mod('magista_home_video') !='' ) {  ?>
                <?php echo get_theme_mod('magista_home_video'); ?>
                <?php } else {  ?> 
                    <iframe width="700" height="400" src="//www.youtube.com/embed/ppy-fgbPn2s" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_team_check')) { ?>
<div class="magista_team">
        <div class="magista_page-title" data-scroll-reveal="enter right over 2s">
            <?php if ( get_theme_mod('magista_team_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_team_title')); ?></h1>
            <?php } else {  ?> <h1><?php esc_html_e('Team', 'magista') ?></h1>
            <?php } ?>
        </div>
        <div class="row">
            <div class="magista_grid col-xs-3" data-scroll-reveal="enter left over 2s" id="team1">
                <?php if ( get_theme_mod('magista_team_image_1') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('magista_team_image_1')); ?>" /></div>
                <?php } else {  ?>
                <div><img src="<?php echo get_template_directory_uri(); ?>/img/image9.jpg" /></div>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_title_1') !='' ) {  ?><h4><?php echo esc_html(get_theme_mod('magista_team_title_1')); ?></h4>
                <?php } else {  ?> <h4><?php esc_html_e('Saumya Sharma', 'magista') ?></h4>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_description_1') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_team_description_1')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('An application developer by profession and a WordPress enthusiast who has expertise in managing all the customization in application.', 'magista') ?></p>
                <?php } ?>                
                <ul class="magista_social-icons">
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_fb') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_fb')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.facebook.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_tw') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_tw')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://twitter.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_ln') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_ln')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.linkedin.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_gp') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_gp')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://plus.google.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
                <div class="magista_icon-share"><i class="fa fa-share-alt"></i></div>
            </div>
            <div class="magista_grid col-xs-3" data-scroll-reveal="enter top over 2s" id="team2">
                <?php if ( get_theme_mod('magista_team_image_2') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('magista_team_image_2')); ?>" /></div>
                <?php } else {  ?>
                <div><img src="<?php echo get_template_directory_uri(); ?>/img/image9.jpg" /></div>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_title_2') !='' ) {  ?><h4><?php echo esc_html(get_theme_mod('magista_team_title_2')); ?></h4>
                <?php } else {  ?> <h4><?php esc_html_e('Purva Jain', 'magista') ?></h4>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_description_2') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_team_description_2')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('An application developer by profession and a WordPress enthusiast who has expertise in managing all the customization in application.', 'magista') ?></p>
                <?php } ?>
                <ul class="magista_social-icons">
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_fb') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_fb')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.facebook.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_tw') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_tw')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://twitter.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_ln') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_ln')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.linkedin.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_gp') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_gp')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://plus.google.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
                <div class="magista_icon-share"><i class="fa fa-share-alt"></i></div>
            </div>
            <div class="magista_grid col-xs-3" data-scroll-reveal="enter bottom over 2s" id="team3">
                <?php if ( get_theme_mod('magista_team_image_3') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('magista_team_image_3')); ?>" /></div>
                <?php } else {  ?>
                <div><img src="<?php echo get_template_directory_uri(); ?>/img/image9.jpg" /></div>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_title_3') !='' ) {  ?><h4><?php echo esc_html(get_theme_mod('magista_team_title_3')); ?></h4>
                <?php } else {  ?> <h4><?php esc_html_e('Shruti Taldar', 'magista') ?></h4>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_description_3') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_team_description_3')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('An application developer by profession and a WordPress enthusiast who has expertise in managing all the customization in application.', 'magista') ?></p>
                <?php } ?>
                <ul class="magista_social-icons">
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_3_fb') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_3_fb')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.facebook.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_3_tw') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_3_tw')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://twitter.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_3_ln') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_3_ln')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.linkedin.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_3_gp') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_3_gp')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://plus.google.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
                <div class="magista_icon-share"><i class="fa fa-share-alt"></i></div>
            </div>
            <div class="magista_grid col-xs-3" data-scroll-reveal="enter right over 2s" id="team4">
                <?php if ( get_theme_mod('magista_team_image_4') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('magista_team_image_4')); ?>" /></div>
                <?php } else {  ?>
                <div><img src="<?php echo get_template_directory_uri(); ?>/img/image9.jpg" /></div>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_title_4') !='' ) {  ?><h4><?php echo esc_html(get_theme_mod('magista_team_title_4')); ?></h4>
                <?php } else {  ?> <h4><?php esc_html_e('Nikita Pariyani', 'magista') ?></h4>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_description_4') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_team_description_4')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('An application developer by profession and a WordPress enthusiast who has expertise in managing all the customization in application.', 'magista') ?></p>
                <?php } ?>
                <ul class="magista_social-icons">
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_4_fb') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_4_fb')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.facebook.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_4_tw') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_4_tw')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://twitter.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_4_ln') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_4_ln')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.linkedin.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_4_gp') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_4_gp')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://plus.google.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
                <div class="magista_icon-share"><i class="fa fa-share-alt"></i></div>
            </div>
        </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_test_check')) { ?>
<div class="magista_testimonial">
    <div class="magista_page-title" data-scroll-reveal="enter top over 2s">
        <?php if ( get_theme_mod('magista_test_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_test_title')); ?></h1>
        <?php } else {  ?> <h1><?php esc_html_e('Testimonial', 'magista') ?></h1>
        <?php } ?>
    </div>
    <div class="magista_test-flex container" data-scroll-reveal="enter bottom over 2s">
        <div class="flexslider">
            <ul class="slides">
                <li id="magista_content1">
                    <div class="magista_test-image">
                        <?php if ( get_theme_mod('magista_test_image_1') !='' ) {  ?>
                        <div><img src="<?php echo esc_url(get_theme_mod('magista_test_image_1')); ?>" /></div>
                        <?php } else {  ?>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image10.jpg" /></div>
                        <?php } ?>
                    </div>
                    <div class="magista_test-content">
                        <?php if ( get_theme_mod('magista_test_description_1') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_test_description_1')); ?></p>
                        <?php } else {  ?> <p><?php esc_html_e('I really love your products and support you 100%. I am a new web developer. I started in October of 2012 and Magista has helped me succeed. But today, I have dozens and dozens of customers and all of their websites are built with an Inktheme. I love you guys. Keep up the good work and many blessings from God be upon you.', 'magista') ?></p>
                        <?php } ?>
                    </div>
                </li>
                <li id="magista_content2">
                    <div class="magista_test-image">
                        <?php if ( get_theme_mod('magista_test_image_2') !='' ) {  ?>
                        <div><img src="<?php echo esc_url(get_theme_mod('magista_test_image_2')); ?>" /></div>
                        <?php } else {  ?>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image11.jpg" /></div>
                        <?php } ?>
                    </div>
                    <div class="magista_test-content">
                        <?php if ( get_theme_mod('magista_test_description_2') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_test_description_2')); ?></p>
                        <?php } else {  ?> <p><?php esc_html_e('I really love your products and support you 100%. I am a new web developer. I started in October of 2012 and Magista has helped me succeed. But today, I have dozens and dozens of customers and all of their websites are built with an Inktheme. I love you guys. Keep up the good work and many blessings from God be upon you.', 'magista') ?></p>
                        <?php } ?>
                    </div>
                </li>
                <li id="magista_content3">
                    <div class="magista_test-image">
                        <?php if ( get_theme_mod('magista_test_image_3') !='' ) {  ?>
                        <div><img src="<?php echo esc_url(get_theme_mod('magista_test_image_3')); ?>" /></div>
                        <?php } else {  ?>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image12.jpg" /></div>
                        <?php } ?>
                    </div>
                    <div class="magista_test-content">
                        <?php if ( get_theme_mod('magista_test_description_3') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_test_description_3')); ?></p>
                        <?php } else {  ?> <p><?php esc_html_e('I really love your products and support you 100%. I am a new web developer. I started in October of 2012 and Magista has helped me succeed. But today, I have dozens and dozens of customers and all of their websites are built with an Inktheme. I love you guys. Keep up the good work and many blessings from God be upon you.', 'magista') ?></p>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_gallery_check')) { ?>
<div class="magista_gallery">
    <div class="magista_page-title" data-scroll-reveal="enter top over 2s">
        <?php if ( get_theme_mod('magista_gallery_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_gallery_title')); ?></h1>
        <?php } else {  ?> <h1><?php esc_html_e('Gallery', 'magista') ?></h1>
        <?php } ?>
    </div>
    <div class="magista_content">
        <div class="magista_one" data-scroll-reveal="enter bottom over 2s">
            <?php $var=get_theme_mod('magista_gallery_shortcode'); ?>
            <?php if($var) { ?>
            <div class="magista_gallery-img"><?php echo do_shortcode($var); ?></div>
            <?php }
            else {
                echo "Add your gallery";
            }
            ?>
        </div>        
    </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_blog_check')) { ?>
<?php get_template_part('content','frontposts') ?>
<?php } ?>
<?php get_footer(); ?>