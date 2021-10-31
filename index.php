<?php get_header(); ?>
<div class="container">
  <div class="wrapper flex">
    <main class="left">
      index.php
      <div class="articles">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="article">
              <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p class="article-content"><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; else : ?>
          記事がありません。
        <?php endif; ?>
      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>