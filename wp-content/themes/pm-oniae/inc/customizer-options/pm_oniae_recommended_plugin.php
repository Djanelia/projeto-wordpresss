<?php
/* Notifications in customizer */

require get_template_directory()  . '/inc/customizer-notify/pm-oniae-notify.php';
$pm_oniae_config_customizer = array(
	'recommended_plugins'       => array(
		'spediex-for-theme' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Spediex For Theme</strong> plugin for taking full advantage of all the features this theme has to offer pm_oniae.', 'pm-oniae')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'pm-oniae' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'pm-oniae' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'pm-oniae' ),
	'activate_button_label'     => esc_html__( 'Activate', 'pm-oniae' ),
	'pm_oniae_deactivate_button_label'   => esc_html__( 'Deactivate', 'pm-oniae' ),
);
pm_oniae_Customizer_Notify::init( apply_filters( 'pm_oniae_recommended_plugins', $pm_oniae_config_customizer ) );