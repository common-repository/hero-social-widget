<?php

/*
Plugin Name: Hero Social Widget
Plugin URI: http://herowp.com/social_url
Description: Display your social profiles in a cool widget
Version: 1.0
Author: HeroWP
Author URI: http://herowp.com
*/

function herowp_register_style(){
	wp_enqueue_style( 'style', HEROWP_DIR.'assets/css/hero-social-style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'herowp_register_style');

if(!defined('HEROWP_PATH')) define( 'HEROWP_PATH', plugin_dir_path(__FILE__) );
if(!defined('HEROWP_DIR')) define( 'HEROWP_DIR', plugin_dir_url(__FILE__) );

class herowp_social_widget extends WP_Widget {

    // Create Widget
    function herowp_social_widget() {
        parent::WP_Widget(false, $name = 'Hero Social Widget', array('description' => 'A cool widget do display social links.'));
    }

    // Widget Content
    function widget($args, $instance) { 
        extract( $args );
      
        $title = esc_textarea($instance['title']);
        $facebook = esc_textarea($instance['facebook']);
        $twitter = esc_textarea($instance['twitter']);
        $gplus = esc_textarea($instance['gplus']);
        $flickr = esc_textarea($instance['flickr']);
        $rss = esc_textarea($instance['rss']);
        $deviantart = esc_textarea($instance['deviantart']);
        $youtube = esc_textarea($instance['youtube']);
        $vimeo = esc_textarea($instance['vimeo']);
        $dribbble = esc_textarea($instance['dribbble']);
        $linkedin = esc_textarea($instance['linkedin']);
        $pinterest = esc_textarea($instance['pinterest']);
        $behance = esc_textarea($instance['behance']);


        ?>
		
			<?php 
			
			echo $before_widget;
			if ( !empty( $title ) ) echo $before_title . $title . $after_title;
			
			?>
			
			<div class="hero-social-widget-holder">
				<ul>
		
					<?php if (strlen($facebook)>=1) : ?>
						<li><a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/facebook.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($twitter)>=1) : ?>
						<li><a href="<?php echo $twitter; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/twitter.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($gplus)>=1) : ?>
						<li><a href="<?php echo $gplus; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/gplus.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($flickr)>=1) : ?>
						<li><a href="<?php echo $flickr; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/flickr.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($rss)>=1) : ?>
						<li><a href="<?php echo $rss; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/rss.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($deviantart)>=1) : ?>
						<li><a href="<?php echo $deviantart; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/deviantart.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($youtube)>=1) : ?>
						<li><a href="<?php echo $youtube; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/youtube.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($vimeo)>=1) : ?>
						<li><a href="<?php echo $vimeo; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/vimeo.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($dribbble)>=1) : ?>
						<li><a href="<?php echo $dribbble; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/dribbble.png'; ?>"></a></li>
					<?php endif; ?>			
					
					<?php if (strlen($linkedin)>=1) : ?>
						<li><a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/linkedin.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($pinterest)>=1) : ?>
						<li><a href="<?php echo $pinterest; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/pinterest.png'; ?>"></a></li>
					<?php endif; ?>
					
					<?php if (strlen($behance)>=1) : ?>
						<li><a href="<?php echo $behance; ?>" target="_blank"><img src="<?php echo HEROWP_DIR.'assets/images/behance.png'; ?>"></a></li>
					<?php endif; ?>
					
				</ul>
			</div>
			
			<?php echo $after_widget; ?>
			
				
		

        <?php
     }

    // Update and save the widget
    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    // Backend form
    function form($instance) {
       
        $title = esc_textarea($instance['title']);
        $facebook = esc_textarea($instance['facebook']);
        $twitter = esc_textarea($instance['twitter']);
        $gplus = esc_textarea($instance['gplus']);
        $flickr = esc_textarea($instance['flickr']);
        $rss = esc_textarea($instance['rss']);
        $deviantart = esc_textarea($instance['deviantart']);
        $youtube = esc_textarea($instance['youtube']);
        $vimeo = esc_textarea($instance['vimeo']);
        $dribbble = esc_textarea($instance['dribbble']);
        $linkedin = esc_textarea($instance['linkedin']);
        $pinterest = esc_textarea($instance['pinterest']);
        $behance = esc_textarea($instance['behance']);
       
        ?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('gplus'); ?>"><?php _e('Google+ URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('gplus'); ?>" name="<?php echo $this->get_field_name('gplus'); ?>" type="text" value="<?php echo $gplus; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo $flickr; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('Rss URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo $rss; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('deviantart'); ?>"><?php _e('DeviantArt URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('deviantart'); ?>" name="<?php echo $this->get_field_name('deviantart'); ?>" type="text" value="<?php echo $deviantart; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo $vimeo; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php _e('Dribbble URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" type="text" value="<?php echo $dribbble; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo $pinterest; ?>" />
		</p>		
		
		<p>
			<label for="<?php echo $this->get_field_id('behance'); ?>"><?php _e('Behance URL:'); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id('behance'); ?>" name="<?php echo $this->get_field_name('behance'); ?>" type="text" value="<?php echo $behance; ?>" />
		</p>

		<p>Don't forget to visit us for <a href="http://herowp.com/?ref=hero-social-widget" target="_blank">freebies and wordpress themes.</a></p>
          		
		         
        <?php       
    }

}
add_action('widgets_init', 'herowp_social_widget_init');
function herowp_social_widget_init() {
    register_widget('herowp_social_widget');
}
?>