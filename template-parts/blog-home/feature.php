<?php
$wordpress_theme_fp = new WP_Query(
    array(
        'meta_key' => 'featured',
        'meta_value' => '1',
        'posts_per_page' => 3
    )
);

$post_data = array();

while ($wordpress_theme_fp->have_posts()) {
    $wordpress_theme_fp->the_post();
    $categories = get_categories();
    $category = $categories[mt_rand(0, count($categories) - 1)];
    $post_data[] = array(
        'title' => get_the_title(),
        'date'  => get_the_date(),
        'author' => get_the_author_meta('display_name'),
        'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'author_avatar' => get_avatar_url(get_the_author_meta('ID')),
        'author_url'  => get_author_posts_url(get_the_author_meta('ID')),
        'cat' => $category->name,
        'permalink' => get_the_permalink(),
    );
}
?>
<div class="pageheader-content row">
    <div class="col-full">



        <?php
        if ($wordpress_theme_fp->post_count > 1) {
        ?>
            <div class="featured">
                <div class="featured__column featured__column--big">
                    <div class="entry" style="background-image:url(<?php echo esc_url($post_data[0]['thumbnail']); ?>);">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0"><?php echo esc_html($post_data[0]['cat']); ?></a></span>

                            <h1><a href="<?php echo esc_url($post_data[0]['permalink']); ?>" title=""><?php echo esc_html($post_data[0]['title']); ?></a></h1>

                            <div class="entry__info">
                                <a href="<?php echo esc_url($post_data[0]['author_url']); ?>" class="entry__profile-pic">
                                    <img class="avatar" src="<?php echo esc_url($post_data[0]['author_avatar']); ?>" alt="<?php echo esc_html($post_data[0]['author']); ?>">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="<?php echo esc_url($post_data[0]['author_url']); ?>"><?php echo esc_html($post_data[0]['author']); ?></a></li>
                                    <li><?php echo esc_html($post_data[0]['date']); ?></li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->
                </div> <!-- end featured__big -->

                <div class="featured__column featured__column--small">

                    <?php
                    for ($i = 1; $i < 3; $i++) {
                    ?>
                        <div class="entry" style="background-image:url(<?php echo esc_url($post_data[$i]['thumbnail']); ?>);">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0"><?php echo esc_html($post_data[$i]['cat']); ?></a></span>

                                <h1><a href="#0" title=""><?php echo esc_html($post_data[$i]['title']); ?></a></h1>

                                <div class="entry__info">
                                    <a href="<?php echo esc_url($post_data[$i]['author_url']); ?>" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo esc_url($post_data[$i]['author_avatar']); ?>" alt="<?php echo esc_html($post_data[$i]['author']); ?>">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="<?php echo esc_url($post_data[$i]['author_url']); ?>"><?php echo esc_html($post_data[$i]['author']); ?></a></li>
                                        <li><?php echo esc_html($post_data[$i]['date']); ?></li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>

        <?php
        }

        wp_reset_query();

        ?>
    </div>
</div>