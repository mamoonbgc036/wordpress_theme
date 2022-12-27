
<article class="masonry__brick entry format-standard" data-aos="fade-up">
    <div class="entry__thumb">
        <a href="single-standard.html" class="entry__thumb-link">
            <?php 
            the_post_thumbnail();
            ?>
        </a>
    </div>

    <div class="entry__text">
        <?php get_template_part( './template-parts/common/post-common-body' ); ?>
    </div>
</article> <!-- end article -->