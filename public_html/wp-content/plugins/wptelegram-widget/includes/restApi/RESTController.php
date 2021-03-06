<?php
/**
 * WP REST API functionality of the plugin.
 *
 * @link       https://manzoorwani.dev
 * @since      1.7.0
 *
 * @package    WPTelegram_Widget
 * @subpackage WPTelegram_Widget/includes
 */

namespace WPTelegram\Widget\includes\restApi;

/**
 * Base class for all the endpoints.
 *
 * @since 1.7.0
 *
 * @package    WPTelegram_Widget
 * @subpackage WPTelegram_Widget/includes
 * @author     Manzoor Wani <@manzoorwanijk>
 */
abstract class RESTController extends \WP_REST_Controller {

	/**
	 * The namespace of this controller's route.
	 *
	 * @var string
	 * @since 2.0.0
	 */
	const NAMESPACE = 'wptelegram-widget/v1';

	/**
	 * The base of this controller's route.
	 *
	 * @var string
	 */
	const REST_BASE = '';
}
