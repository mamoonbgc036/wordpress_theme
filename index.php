<?php
    get_header();
?>
<!-- s-content
    ================================================== -->
<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            <?php

                while (have_posts()) {
                    the_post();
                    get_template_part('./template-parts/post-formats/post', get_post_format());
                }

            ?>

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <?php wisdom_pagination();?>
            </nav>
        </div>
    </div>

</section> <!-- s-content -->


<!-- s-extra
    ================================================== -->
<section class="s-extra">

    <div class="row top">

        <div class="col-eight md-six tab-full popular">
            <h3>Popular Posts</h3>

            <div class="block-1-2 block-m-full popular__posts">
                <?php
                    $wisdom_popular_post = new WP_Query(array(
                        'posts_per_page'      => 6,
                        'ignore_sticky_posts' => 1,
                        'orderby'             => "comment_count",
                    ));

                    if ($wisdom_popular_post) {
                        $wisdom_popular_post->have_posts();
                    ?>
                <article class="col-block popular__post">
                    <a href="<?php the_permalink();?>" class="popular__thumb">
                        <?php the_post_thumbnail();?>
                    </a>
                    <h5><a href="#0"><?php the_title();?></a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"><?php the_author();?></a></span>
                        <span class="popular__date"><span>on</span> <time
                                datetime="2017-12-19"><?php the_date();?></time></span>
                    </section>
                </article>
                <?php
                    }
                ?>
            </div> <!-- end popular_posts -->
        </div> <!-- end popular -->

        <div class="col-four md-six tab-full about">
            <h3>About Philosophy</h3>

            <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in
                ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque
                velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
            </p>

            <ul class="about__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>
            </ul> <!-- end header__social -->
        </div> <!-- end about -->

    </div> <!-- end row -->

    <div class="row bottom tags-wrap">
        <div class="col-full tags">
            <h3>Tags</h3>

            <div class="tagcloud">
                <a href="#0">Salad</a>
                <a href="#0">Recipe</a>
                <a href="#0">Places</a>
                <a href="#0">Tips</a>
                <a href="#0">Friends</a>
                <a href="#0">Travel</a>
                <a href="#0">Exercise</a>
                <a href="#0">Reading</a>
                <a href="#0">Running</a>
                <a href="#0">Self-Help</a>
                <a href="#0">Vacation</a>
            </div> <!-- end tagcloud -->
        </div> <!-- end tags -->
    </div> <!-- end tags-wrap -->

</section> <!-- end s-extra -->


<?php
get_footer();
?>