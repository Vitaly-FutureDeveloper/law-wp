<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.fw-iconbox` supports 3 styles:
 * `fw-iconbox-1`, `fw-iconbox-2` and `fw-iconbox-3`
 */
?>
<div class="fw-iconbox clearfix <?php echo esc_attr($atts['style']); ?>">

	<? if(!empty($atts['block_link'])) : ?>
		<a <? if(!empty($atts['block_link_class'])) echo " class='{$atts['block_link_class']}'" ?> 
			<? echo !empty($atts['block_link_href']) ? " href={$atts['block_link_href']}" : " href='#'"; ?>
		>
	<? endif; ?>

	<div class="fw-iconbox-image">
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	</div>
	<div class="fw-iconbox-aside">
		<div class="fw-iconbox-title">
			<h3><?php echo $atts['title']; ?></h3>
		</div>
		<div class="fw-iconbox-text">
			<p><?php echo $atts['content']; ?></p>
		</div>
	</div>

	<? if(!empty($atts['block_link'])) : ?>
		</a>
	<? endif; ?>
</div>