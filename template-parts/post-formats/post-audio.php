<?php
    $philosophy_audio_file = get_field("source_file");
?>
<article class="masonry__brick entry format-audio" data-aos="fade-up">
    <div class="entry__thumb">
        <a href="<?php the_permalink();?>" class="entry__thumb-link">
            <?php the_post_thumbnail('post-image-square');?>
        </a>
        <?php
            if ($philosophy_audio_file) {
            ?>
        <audio id="player" src="<?php echo esc_url($philosophy_audio_file); ?>" width="100%" height="42"
            controls="controls">
        </audio>
        <?php
            }
        ?>
    </div>

    <div class="entry__text">
        <?php get_template_part('./template-parts/common/post-common-body');?>
    </div>

</article> <!-- end article -->