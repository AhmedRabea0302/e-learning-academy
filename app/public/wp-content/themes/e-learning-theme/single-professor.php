<?php get_header(); ?>
    <?php while(have_posts()) {
        the_post(); 
        pageBanner(); ?>
    
        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    
                </p>
            </div>

            <div class="generic-content">
                <div class="row group">
                    <div class="one-third">
                        <?php the_post_thumbnail('professorPortrait'); ?>
                    </div>
                    <div class="two-third">
                        <?php the_content(); ?>
                    </div>
                </div>
                
            </div>

            <?php
                $relatedPrograms = get_field('relaated_programs');
                if($relatedPrograms) {
                    echo '<hr class="section-break" />';
                    echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
                    echo '<ul class="link-list min-list">';
                    foreach ($relatedPrograms as $program) { ?>
                        <li >
                            <a href="<?php echo get_the_permalink($program); ?>">    
                            <?php echo get_the_title($program); ?>
                            </a>
                        </li>
                    <?php }
                    echo '<ul>';
                }
            ?>
        </div>

   <?php 
   }

   get_footer();