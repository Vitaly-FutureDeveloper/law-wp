<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var int $form_id
 * @var string $submit_button_text
 * @var array $extra_data
 */

?>
<div class="form-group">
	<input type="submit" class="<? echo $extra_data['submit_button_class'] ?>" value="<?php echo esc_attr( $submit_button_text ) ?>"/>
</div>