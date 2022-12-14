<?php

/**
 * Adds Foo_Widget widget.
 */
class Sociel_Icon extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'sociel', // Base ID
			'Sociel_Icon', // Name
			array( 'description' => __( 'A Sociel Widget', 'wordpress_theme' ) ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		var_dump($instance);
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$sociel_links = array(
			 "facebook",
            "twitter",
            "github",
		);
		echo $before_widget;
		echo '<ul class="'.$instance['classname'].'">';
		if ( ! empty( $title ) ) {
			echo '<div class="widget-title">';
			echo $before_title . $title . $after_title;
			echo '</div>';
		}

		foreach ($sociel_links as $soc) {
			if ( $instance[$soc] ) {
				$url = trim( $instance[$soc] );
				echo '<li><a class="fa fa-'.$soc.'" href="'.$url.'"></a></li>';
			}
		}
		echo '</ul>';
		echo $after_widget;
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'New title', 'wordpress_theme' );
		}

		$classname = '';

		if ( isset( $instance['classname'] ) ) {
			$classname = $instance['classname'];
		}

		$sociel_links = array(
			 "facebook",
            "twitter",
            "github",
		);
		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		 </p>
		 <p>
			<label for="<?php echo $this->get_field_name( 'classname' ); ?>"><?php _e( 'CSS Class Name:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'classname' ); ?>" name="<?php echo $this->get_field_name( 'classname' ); ?>" type="text" value="<?php echo esc_attr( $classname ); ?>" />
		 </p>
		<?php

		foreach ($sociel_links as $soc) {
			?>
			 <p>
			<label for="<?php echo $this->get_field_name( $soc ); ?>"><?php _e( strtoupper( $soc ) ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( $soc ); ?>" name="<?php echo $this->get_field_name( $soc ); ?>" type="text" value="<?php echo esc_attr( $instance[$soc] ); ?>" />
		 </p>
			<?php
		}
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['classname'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['classname'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['github'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['github'] ) : '';

		return $instance;
	}
} // class Foo_Widget


function my_sociel_icon() {
	register_widget( 'Sociel_Icon' );
}

add_action( 'widgets_init', 'my_sociel_icon' );