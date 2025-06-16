<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://github.com/Dnprz7
 * @since      1.0.0
 *
 * @package    Macromatic_404_Detector
 * @subpackage Macromatic_404_Detector/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Macromatic_404_Detector
 * @subpackage Macromatic_404_Detector/admin
 * @author     Daniel Perez <ddaprr@gmail.com>
 */
class Macromatic_404_Detector_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Macromatic_404_Detector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Macromatic_404_Detector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/macromatic-404-detector-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Macromatic_404_Detector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Macromatic_404_Detector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/macromatic-404-detector-admin.js', array( 'jquery' ), $this->version, false );

	}

    //create menu method
    public function macromatic_404_detector_menu() {
        add_menu_page(
            'Macromatic 404 Detector Tool',
            'Macromatic 404 Detector',
            'manage_options',
            'macromatic-404-detector-tool',
            array($this, 'macromatic_404_detector_plugin'),
            'dashicons-admin-links',
            22
        );

        //create plugin submenus
        add_submenu_page(
            'macromatic-404-detector-tool',
            'Create Report',
            'Create Report',
            'manage_options',
            'macromatic-404-detector-dashboard',
            array($this, 'macromatic_404_detector_dashboard'),
        );

        add_submenu_page(
            'macromatic-404-detector-tool',
            'All Reports',
            'All Reports',
            'manage_options',
            'macromatic-404-detector-reports',
            array($this, 'macromatic_404_detector_reports'),
        );
    }

    //menu callback function
    public function macromatic_404_detector_plugin() {
        echo '<h3>Welcome to Macromatic 404 Detector Menu</h3>';
    }

    //submenu callback function
    public function macromatic_404_detector_dashboard() {
        echo '<h3>Welcome to Macromatic 404 Detector Dashboard</h3>';
    }

    //submenu callback function
    public function macromatic_404_detector_reports() {
        echo '<h3>Welcome to Macromatic 404 Detector Reports</h3>';
    }
}
