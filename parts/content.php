<article>
    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> /h2></a></h2>
    <?php if (have_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array(275, 275)); ?></a>
    <?php endif; ?>

    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>

        <?php if (has_category()): ?>
            Categories: <span> <?php the_category(''); ?> </span>
        <?php endif; ?>

        <?php if (has_tag()): ?>
            Tags: <span> <?php the_tags('', ''); ?> </span>
        <?php endif; ?>

    </div>
    <?php the_excerpt(); ?>
</article>