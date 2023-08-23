<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
// debug($atts);

$number = abs ((int) $atts['posts_number']) ? $atts['posts_number'] : 3;

$query = new WP_Query( array('posts_per_page' => $number,) );

?>


<div class="fw-row">

<? if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

<div class="col-lg-4 col-md-4">
        <div class="fh5co-blog animate-box">
            <a href="<? the_permalink() ?>">
                <? 
                if(has_post_thumbnail()) {
                    $img_url = get_the_post_thumbnail_url();
                } else {
                    $img_url = "https://thumbs.dreamstime.com/z/vector-%D0%BB%D1%8E%D0%B1%D0%B0%D1%8F-%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D0%B0-meme-%D0%BF%D0%B0%D1%80%D0%BD%D1%8F-%D1%8F-%D1%8E%D0%B1%D0%BE%D0%B3%D0%BE-%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%D0%B0-eps-78588726.jpg?w=992";
                }
                ?>
                <img src="<? echo $img_url ?>" alt="">
            </a>
            <div class="blog-text">
                <span class="posted_on"><? the_time('Y - M. jS') ?></span>
                <span class="comment"><a href="<? the_permalink() ?>"><? echo get_comments_number() ?><i class="icon-speech-bubble"></i></a></span>
                <h3><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>
                <? the_content('') ?>
                <a href="<? the_permalink() ?>" class="btn btn-primary"><? _e('Read More') ?></a>
            </div> 
        </div>
    </div>

<? endwhile; ?>

<? else: ?>

<? endif; ?>
    
</div>
