<?php get_header(); ?>

<section class="news-wrapper">
    <div class="container">
        <h1><?php single_cat_title(); ?></h1>

        <?php if(have_posts()) : ?>
            <div class="news-grid">
                <?php while(have_posts()) : the_post(); ?>
                    <article class="news-item">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('full', ['class' => 'news-img']); ?>
                        <?php endif; ?>

                        <h2 class="news-title"><?php the_title(); ?></h2>
                        <p class="news-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php 
                    echo paginate_links(array(
                        'prev_text' => '« Prev',
                        'next_text' => 'Next »'
                    )); 
                ?>
            </div>

        <?php else : ?>
            <p>No news found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>