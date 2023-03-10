<?php get_header(); ?>

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <?php if (have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>

                    <article class="post">

                    <div class="entry-header cf">

                        <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

                        <p class="post-meta">

                            <time class="date" datetime="2014-01-14T11:24"><?php the_date(); ?></time>
                            /
                            <?php the_category(); ?>
                            <span class="categories">
                            <a href="#">Design</a> /
                            <a href="#">User Inferface</a> /
                            <a href="#">Web Design</a>
                            </span>

                        </p>

                    </div>

                    <div class="post-thumb">
                        <a href="single.html" title=""><img src="<?= get_template_directory_uri(); ?>/assets/images/post-image/post-image-1300x500-01.jpg" alt="post-image" title="post-image"></a>
                    </div>

                    <div class="post-content">
                    <?php the_excerpt(); ?>
                    </div>

                    </article> <!-- post end -->

                <?php endwhile; ?>
                <? the_posts_navigation(); ?>
                <!-- Pagination -->
                <nav class="col full pagination">
                        <ul>
                      <li><span class="page-numbers prev inactive">Prev</span></li>
                            <!-- <li><span class="page-numbers current">1</span></li>
                            <li><a href="#" class="page-numbers">2</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">3</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">4</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">5</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">6</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">7</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">8</a></li>
                      <li><a href="<?= get_template_directory_uri(); ?>/assets/#" class="page-numbers">9</a></li> -->
                            <li><a href="#" class="page-numbers next">Next</a></li>
                        </ul>
                    </nav>
            <?php endif; ?>


         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">
         <?php get_sidebar(); ?>
         </div> <!-- Secondary End-->
      </div>
   </div> <!-- Content End-->

<?php get_footer(); ?>