?>


<?php
// Start the Loop.
if (have_posts()) :
  while (have_posts()) : the_post();
    if (in_category(3)) : ?>
      <div class="post-category-three">
      <?php else : ?>
        <div class="post">
        <?php endif;
      the_title('<h2>', ';</h2>');
      printf(__('Posted by %s', 'textdomain'), get_the_author_posts_link());
        ?>
        <div class="entry">
          <?php the_content() ?>
        </div>

        <?php

        _e('Posted in ', 'textdomain');
        the_category(', ');
        ?>
        </div>

    <?php
  endwhile;
else :
  _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
    ?>
    <!--このループ死ぬほど見ずらい-->
