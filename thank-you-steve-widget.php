<?php
/*
Plugin Name: Thank You Steve
Plugin URI: http://spontane-ordnung.de/2011/10/wordpress-plugin-thankyousteve/
Description: This plugin enables you to use the ThankYouSteve widget. Drag the widget into your sidebar and a box "Steve Jobs 1955 - 2011" with an external link to http://www.apple.com/stevejobs/ appears.
Author: nova GmbH Internetagentur
Author URI: http://nova-web.de/
Version: 1.2
*/
?>
<?php
/*  Copyright 2011 nova GmbH Internetagentur (email: info@nova-web.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class ThankYouSteveWidget extends WP_Widget {

	function ThankYouSteveWidget() {
		parent::WP_Widget( 'thank_you_steve', 'Thank You Steve Widget', array( 'description' => '"Steve Jobs 1955 - 2011" Box with an external link to http://www.apple.com/stevejobs/' ) );
	}

	function form($instance) {
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		return $instance;
	}

	function widget($args, $instance) {
		extract( $args );
		echo $before_widget;
		?>
		<div style="background: white; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; border: 1px solid black; text-align: center;">
			<a href="http://www.apple.com/stevejobs/" target="_blank" ><img src="<?php echo plugins_url("thankyousteve/thankyousteve.gif"); ?>" alt="Steve Jobs 1955 - 2011" /></a>
		</div>
		<?php
		echo $after_widget;
	}

}

add_action( 'widgets_init', create_function( '', 'register_widget("ThankYouSteveWidget");' ) );
?>
