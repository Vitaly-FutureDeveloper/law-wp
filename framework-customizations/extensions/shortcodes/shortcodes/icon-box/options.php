<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'block_link'       => array(
		'type' => 'checkbox',
		'label' => __( 'Wrap in link?', 'fw' ),
        'text' => __( '', 'fw' )
	),
	'block_link_href'       => array(
		'type' => 'text',
		'label' => __( 'Href link?', 'fw' ),
	),
    'block_link_class'       => array(
		'type' => 'text',
		'label' => __( 'Link Class', 'fw' )
	),

	'style'   => array(
		'type'    => 'select',
		'label'   => __('Box Style', 'fw'),
		'choices' => array(
			'fw-iconbox-1' => __('Icon above title', 'fw'),
			'fw-iconbox-2' => __('Icon in line with title', 'fw')
		)
	),
	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Choose an Icon', 'fw'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'fw' ),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter the desired content', 'fw' ),
	),
);