<?php

/**
 * Plugin main file.
 *
 * @wordpress-plugin
 * Plugin Name:       Kntnt Date Shortcode
 * Plugin URI:        https://github.com/TBarregren/kntnt-date-shortcode
 * Description:       Provides a shortcode for formated date and/or time.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.se/
 * License:           GPLv3
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-date
 * Domain Path:       /languages
 */

namespace Kntnt\Date_Shortcode;

defined( 'WPINC' ) || die;

new Plugin();

final class Plugin {

  public function __construct() {
    load_plugin_textdomain( 'kntnt-date', false, 'languages' );
    add_action( 'plugins_loaded', [ $this, 'run' ] );
  }
  
  public function run() {
    add_shortcode('date', [$this, 'date']);
  }
  
  public function date($atts, $content, $tag) {
  
    $default_date_format = get_option( 'date_format' );
    $default_time_format = get_option( 'time_format' );

    $default = array(
      'format' => "$default_date_format $default_time_format",
      'timespamp' => time(),
    );

    $atts = $this->shortcode_atts($default, $atts);
    
    return date( $atts['format'], $atts['timestamp'] );

  }

  private function shortcode_atts($pairs, $atts, $shortcode = '') {

    $atts = (array) $atts;
    $out = [];
    $pos = 0;

    while($name = key($pairs)) {
      $default = array_shift($pairs);
      if (array_key_exists($name, $atts)) {
        $out[$name] = $atts[$name];
      }
      elseif (array_key_exists($pos, $atts)) {
        $out[$name] = $atts[$pos];
        ++$pos;
      }
      else {
        $out[$name] = $default;
      }
    }

    if ($shortcode) {
      $out = apply_filters("shortcode_atts_{$shortcode}", $out, $pairs, $atts, $shortcode);
    }

    return $out;

  }

}
