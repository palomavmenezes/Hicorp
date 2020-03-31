<?php

	/**
	 *
	 * 	hicorp THEME
	 *
	 * 	@author EckoThemes <support@ecko.me>
	 * 	@version 1.7.0
	 * 	@link http://ecko.me
	 *
	 */


	/*-----------------------------------------------------------------------------------*/
	/* CONFIGURATION
	/*-----------------------------------------------------------------------------------*/

	/*
	 *	THEME INFO
	 */
	define('ECKO_THEME', true);
	define('ECKO_THEME_ID', 'hicorp');
	define('ECKO_THEME_NAME', 'Hicorp');
	define('ECKO_THEME_VERSION', '1.0.0');
	define('ECKO_THEME_WIDTH', '860');
	define('ECKO_DATE_FORMAT', 'jS M \'y');
	define('ECKO_DEMO', false);

	/*
	 *	TYPOGRAPHY
	 */
	//DEFINE('ECKO_FONT_BODY_FAMILY', "Noto Sans");
	//DEFINE('ECKO_FONT_BODY_WEIGHT', "400,700");
	//DEFINE('ECKO_FONT_BODY_SELECTOR', "body, html, h6, p, .widget .rssSummary, .widget li, .widget.latestposts .meta, textarea, .footer-widgets .widget.navigation li");
	//('ECKO_FONT_HEADER_FAMILY', "Montserrat");
	//DEFINE('ECKO_FONT_HEADER_WEIGHT', "400,700");
	//DEFINE('ECKO_FONT_HEADER_SELECTOR', "h1, h2, h3, h4, h5, input, body.author .author-twitter, .comments-body .comments-nocomments, .comments-body .logged-in-as, .comment .comment-meta, .comment-respond #cancel-comment-reply-link, .comment-respond .submit, .cover-blog-posts .cover-post .post-category, .cover-blog-posts .cover-post .post-read-more, .cover-article-count, .filter-bar-options, .footer-post-next span, .footer-widgets .footer-widgets-static .blog-name, .footer-post-next span, nav.navigation-main ul a, nav.navigation-main ul span, nav.navigation-responsive ul a, nav.navigation-responsive ul span, .overlay-post-info .post-read-more, .pagination, .post-body .post-category, .post-body .post-meta, .post-footer .post-tags a, .post-footer .post-share .post-share-title, .post-related .post-related-post span, .post-related .post-related-post .post-category, .post-related .post-related-post .post-title, .post-related .post-related-post .post-read-more, .post-contents blockquote p, .postcontents blockquote p, .page-contents.post-list-masonry .post .post-external-link, .page-contents.post-list-masonry .post .post-category, .page-contents.post-list-masonry .post .post-meta, .page-contents.post-list-masonry .post.format-quote .post-quote blockquote p, .page-contents.post-list-standard .post .post-external-link, .page-contents.post-list-standard .post .post-date, .page-contents.post-list-standard .post .post-category, .page-contents.post-list-standard .post .post-meta, .page-contents.post-list-standard .post.format-quote .post-quote blockquote p, .top-bar .top-bar-logo, .widget li span.count, .widget.authorprofile .meta .title, .widget.authorprofile .meta .twittertag , .widget.authorprofile .meta h3, .widget .tagcloud a, .widget.twitter .author, .widget.twitter .date, .widget.socialshare .sharebutton, .widget.latestposts h5, .widget.relatedposts .category, .widget.randomposts .category, .widget.navigation li, #wp-calendar, .post-show-comments, .post-contents q, .postcontents q");

	/*
	 *	WIDGETS
	 */
	define('ECKO_WIDGET_ADVERTISMENT', true);
	define('ECKO_WIDGET_AUTHOR_PROFILE', true);
	define('ECKO_WIDGET_BLOG_INFO', true);
	define('ECKO_WIDGET_LATEST_POSTS', true);
	define('ECKO_WIDGET_NAVIGATION', true);
	define('ECKO_WIDGET_RANDOM_POSTS', true);
	define('ECKO_WIDGET_RELATED_POSTS', true);
	define('ECKO_WIDGET_SHARE', true);
	define('ECKO_WIDGET_SOCIAL_AUTHOR', true);
	define('ECKO_WIDGET_SOCIAL_BLOG', true);
	define('ECKO_WIDGET_SUBSCRIBE', true);
	define('ECKO_WIDGET_TWITTER', true);


	/*-----------------------------------------------------------------------------------*/
	/* FRAMEWORK
	/*-----------------------------------------------------------------------------------*/

	require_once get_template_directory() . '/inc/eckoframework/eckoframework.php';


	/*-----------------------------------------------------------------------------------*/
	/* POST LIKES
	/*-----------------------------------------------------------------------------------*/

	require_once get_template_directory() . '/inc/post-like/post-like.php';


	/*-----------------------------------------------------------------------------------*/
	/* THEME SETUP
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_theme_setup')){
		function hicorp_theme_setup(){
			add_theme_support('post-formats', array('status', 'aside', 'image', 'video', 'audio', 'gallery', 'quote', 'link'));
			register_nav_menus(
				array(
					'primary' => esc_attr__('Primary Menu', 'hicorp')
				)
			);
		}
	}
	add_action('after_setup_theme', 'hicorp_theme_setup');


	/*-----------------------------------------------------------------------------------*/
	/* ENQUE FONTS, STYLES AND SCRIPTS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_load_scripts')){
		function hicorp_load_scripts(){
			if(!is_admin()){
				// JAVASCRIPT VARS
				wp_localize_script('ecko_js', 'ecko_theme_vars', array(
					'general_hidecomments' => esc_js(get_theme_mod('general_hidecomments', 'false')),
					'general_disable_syntax_highlighter' => esc_js(get_theme_mod('general_disable_syntax_highlighter', 'false')),
					'pagination_enable_ajax' => esc_js(get_theme_mod('pagination_enable_ajax', 'false')),
					'topbar_sticky' => esc_js(get_theme_mod('topbar_sticky', 'false')),
					'localization_no_more_posts' => esc_js(esc_html__('No More Articles', 'hicorp')),
					'localization_fetching_posts' => esc_js(esc_html__('Fetching Articles', 'hicorp')),
					'localization_load_more' => esc_js(esc_html__('Load More', 'hicorp')),
					'localization_email_address' => esc_js(esc_html__('Email Address', 'hicorp')),
					'localization_view_comments' => esc_js(esc_html__('View Comments', 'hicorp'))
				));
			}
		}
	}
	add_action('wp_enqueue_scripts', 'hicorp_load_scripts');


	/*-----------------------------------------------------------------------------------*/
	/* REGISTER THEME RECOMMENDED PLUGINS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_register_plugins')){
		function hicorp_register_plugins(){
			$ecko_plugins = ecko_default_plugins();
			array_push($ecko_plugins, array(
				'name' => 'Categories Images',
				'slug' => 'categories-images',
				'required' => false,
			));
			tgmpa($ecko_plugins);
		}
	}
	add_action('tgmpa_register', 'hicorp_register_plugins');


	/*-----------------------------------------------------------------------------------*/
	/* THEME LIVE DEMO SWITCHER
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_theme_demo_switch')){
		function hicorp_theme_demo_switch(){
			if(!is_admin() && isset($_GET['layout'])){
				switch($_GET['layout']){
					case "standard":
						$_COOKIE['layout'] = "page-layout-standard";
						setcookie('layout', 'page-layout-standard', time() + 3600 * 24, COOKIEPATH, COOKIE_DOMAIN, false);
						break;
					case "masonry":
						$_COOKIE['layout'] = "page-layout-masonry";
						setcookie('layout', 'page-layout-masonry', time() + 3600 * 24, COOKIEPATH, COOKIE_DOMAIN, false);
						break;
					case "single":
						$_COOKIE['layout'] = "page-layout-single";
						setcookie('layout', 'page-layout-single', time() + 3600 * 24, COOKIEPATH, COOKIE_DOMAIN, false);
						break;
				}
			}
		}
	}
	if(ECKO_DEMO){
		add_action('init', 'hicorp_theme_demo_switch');
	}


	/*-----------------------------------------------------------------------------------*/
	/* REGISTER SIDEBARS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_widgets_init')){
		function hicorp_widgets_init(){
			register_sidebar(array(
				'name' => esc_attr__('Footer (Max 3. Widgets)', 'hicorp'),
				'id' => 'footer',
				'description' => esc_attr__('Appears in footer on all pages. Maximum of 3 widgets supported.', 'hicorp'),
				'before_widget' => '<section class="widget">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3><hr>'
			));
		}
	}
	add_action('widgets_init', 'hicorp_widgets_init');


	/*-----------------------------------------------------------------------------------*/
	/* POST META BOX SETTINGS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_option_meta_hicorp_setup')){
		function hicorp_option_meta_hicorp_setup(){
			add_action('add_meta_boxes', 'hicorp_add_option_boxes');
			add_action('save_post', 'hicorp_save_option_meta', 10, 2);
		}
	}
	add_action('load-post.php', 'hicorp_option_meta_hicorp_setup');
	add_action('load-post-new.php', 'hicorp_option_meta_hicorp_setup');

	if(!function_exists('hicorp_add_option_boxes')){
		function hicorp_add_option_boxes(){
			add_meta_box(
				'hicorp-post-options',
				esc_html__('Theme Post Options', 'hicorp'),
				'hicorp_options_meta_box',
				'post',
				'side',
				'core'
			);
			add_meta_box(
				'hicorp-page-options',
				esc_html__('Theme Page Options', 'hicorp'),
				'hicorp_options_meta_box',
				'page',
				'side',
				'core'
			);
		}
	}

	if(!function_exists('hicorp_options_meta_box')){
		function hicorp_options_meta_box($object, $box){
			global $post;
			wp_nonce_field(basename(__FILE__), 'hicorp_post_feature');
			wp_nonce_field(basename(__FILE__), 'hicorp_post_image_background');
			wp_nonce_field(basename(__FILE__), 'hicorp_page_layout');

			$hicorp_post_feature_meta = get_post_meta($post->ID, 'hicorp_post_feature', true);
			$hicorp_post_image_background = get_post_meta($post->ID, 'hicorp_post_image_background', true);
			$hicorp_page_layout_meta = get_post_meta($post->ID, 'hicorp_page_layout', true)

		?>
			<p>
				<strong><?php esc_html_e("Page Layout", 'hicorp'); ?></strong><br>
				<p class="howto"><?php esc_html_e("Configure the page layout of the individual post/custom page.", 'hicorp'); ?></p>
				<input type="radio" id="pagelayout-theme" name="hicorp_page_layout" value="pagelayout-theme" <?php if(!in_array($hicorp_page_layout_meta, array('pagelayout-single', 'pagelayout-sidebar',  'pagelayout-sidebar-left'))){ echo 'checked'; } ?>>
				<label for="pagelayout-default"><?php esc_html_e("Default", 'hicorp'); ?></label><br>
				<input type="radio" id="pagelayout-sidebar" name="hicorp_page_layout" value="pagelayout-sidebar" <?php checked($hicorp_page_layout_meta, 'pagelayout-sidebar'); ?>>
				<label for="pagelayout-sidebar"><?php esc_html_e("Sidebar", 'hicorp'); ?></label><br>
				<input type="radio" id="pagelayout-sidebar-left" name="hicorp_page_layout" value="pagelayout-sidebar-left" <?php checked($hicorp_page_layout_meta, 'pagelayout-sidebar-left'); ?>>
				<label for="pagelayout-sidebar-left"><?php esc_html_e("Sidebar (Left)", 'hicorp'); ?></label><br>
				<input type="radio" id="pagelayout-single" name="hicorp_page_layout" value="pagelayout-single" <?php checked($hicorp_page_layout_meta, 'pagelayout-single'); ?>>
				<label for="pagelayout-single"><?php esc_html_e("Single Column", 'hicorp'); ?></label><br>
			</p>
			<hr>
			<p>
				<strong><?php esc_html_e('Post Feature', 'hicorp'); ?></strong><br>
				<p class="howto"><?php esc_html_e('Configure if this post is shown on the front-page cover.', 'hicorp'); ?></p>
				<label>
					<input type="checkbox" name="hicorp_post_feature" id="hicorp_post_feature" value="yes" <?php checked($hicorp_post_feature_meta, 'yes'); ?> />
					<?php esc_html_e('Enable Post Feature', 'hicorp'); ?>
				</label>
			</p>
			<hr>
			<p>
				<strong><?php esc_html_e('Post Background Image Style', 'hicorp'); ?></strong><br>
				<p class="howto"><?php esc_html_e('Configure if this post uses the alternative background image post style within the post-list. This option is only supported for \'Standard\' format posts.', 'hicorp'); ?></p>
				<label>
					<input type="checkbox" name="hicorp_post_image_background" id="hicorp_post_image_background" value="yes" <?php checked($hicorp_post_image_background, 'yes'); ?> />
					<?php esc_html_e('Enable Post Background Image Style', 'hicorp'); ?>
				</label>
			</p>
			<hr>
			<p class="howto"><?php esc_html_e('More information on these post/page options can be found within the theme documentation under \'Post Formatting\'.', 'hicorp'); ?></p>

		<?php

		}
	}

	if(!function_exists('hicorp_save_option_meta')){
		function hicorp_save_option_meta($post_id, $post){
			$is_autosave = wp_is_post_autosave($post_id);
			$is_revision = wp_is_post_revision($post_id);

			$hicorp_post_feature_meta = (isset($_POST['hicorp_post_feature']) && wp_verify_nonce($_POST['hicorp_post_feature'], basename(__FILE__))) ? 'true' : 'false';
			$hicorp_post_image_background = (isset($_POST['hicorp_post_image_background']) && wp_verify_nonce($_POST['hicorp_post_image_background'], basename(__FILE__))) ? 'true' : 'false';
			$hicorp_page_layout_meta = (isset($_POST['hicorp_page_layout_meta']) && wp_verify_nonce($_POST['hicorp_page_layout_meta'], basename(__FILE__))) ? 'true' : 'false';

			if($is_autosave || $is_revision && !$hicorp_post_feature_meta && !$hicorp_post_image_background && !$hicorp_page_layout_meta){
				return;
			}
			if(isset($_POST['hicorp_post_feature'])){
				update_post_meta($post_id, 'hicorp_post_feature', sanitize_text_field($_POST['hicorp_post_feature']));
			}
			if(isset($_POST['hicorp_post_image_background'])){
				update_post_meta($post_id, 'hicorp_post_image_background', sanitize_text_field($_POST['hicorp_post_image_background']));
			}
			if(isset($_POST['hicorp_page_layout'])){
				update_post_meta($post_id, 'hicorp_page_layout', sanitize_text_field($_POST['hicorp_page_layout']));
			}

		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* PAGINATION
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_posts_link_left_attributes')){
		function hicorp_posts_link_left_attributes(){
			return 'class="pagination-button pagination-older"';
		}
	}
	add_filter('next_posts_link_attributes', 'hicorp_posts_link_left_attributes');

	if(!function_exists('hicorp_posts_link_right_attributes')){
		function hicorp_posts_link_right_attributes(){
			return 'class="pagination-button pagination-newer"';
		}
	}
	add_filter('previous_posts_link_attributes', 'hicorp_posts_link_right_attributes');


	/*-----------------------------------------------------------------------------------*/
	/* CUSTOM BODY CLASS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_custom_body_class')){
		function hicorp_custom_body_class($classes){
			array_push($classes, get_theme_mod('layout_color_scheme', 'light-theme'));
			if(is_single() || is_page()){
				global $post;
				switch(get_post_meta($post->ID, 'hicorp_page_layout', true)){
					case "pagelayout-sidebar":
						array_push($classes, 'page-layout-standard');
						break;
					case "pagelayout-sidebar-left":
						array_push($classes, 'page-layout-standard-left');
						break;
					case "pagelayout-single":
						array_push($classes, 'page-layout-single');
						break;
					default:
						if(get_theme_mod('postpage_default_layout', hicorp_get_page_layout()) !== "page-layout-default"){
							array_push($classes, get_theme_mod('postpage_default_layout', hicorp_get_page_layout()));
						}else{
							array_push($classes, hicorp_get_page_layout());
						}
						break;
				}
				if(!has_post_thumbnail($post->ID)){
					array_push($classes, 'post-basic-layout');
				}
			}else{
				array_push($classes, hicorp_get_page_layout());
			}
			if(is_home() && !have_posts()){
				array_push($classes, 'no-result');
			}
			if(is_home() && get_theme_mod('blogcover_hide_frontpage', false)){
				array_push($classes, 'frontpage-no-cover');
			}
			if(is_home() && get_theme_mod('blogcover_basic', false)){
				array_push($classes, 'frontpage-cover-basic');
			}
			return $classes;
		}
	}
	add_filter('body_class', 'hicorp_custom_body_class');


	/*-----------------------------------------------------------------------------------*/
	/* CUSTOM POST CLASS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_post_class')){
		function hicorp_post_class($classes){
			global $post;
			return $classes;
		}
	}
	add_filter('post_class', 'hicorp_post_class');


	/*-----------------------------------------------------------------------------------*/
	/* DEFAULT WIDGETS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_default_widget_options')){
		function hicorp_get_default_widget_options(){
			return array(
				'before_widget' => '<section class="widget">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3><hr>'
			);
		}
	}

	if(!function_exists('hicorp_get_default_post_widgets')){
		function hicorp_get_default_post_widgets(){
			if(class_exists('ecko_widget_blog_info')){ the_widget('ecko_widget_blog_info', array()); }
			if(class_exists('ecko_widget_author_profile')){ the_widget('ecko_widget_author_profile', array()); }
			if(class_exists('ecko_widget_latest_posts')){ the_widget('ecko_widget_latest_posts', array('title' => esc_html__('Latest Articles', 'hicorp'), 'postcount' => 5)); }
			if(class_exists('ecko_widget_random_posts')){ the_widget('ecko_widget_random_posts', array('title' => '', 'postcount' => 3)); }
			the_widget('WP_Widget_Categories', 'count=true', hicorp_get_default_widget_options());
			the_widget('WP_Widget_Archives', '', hicorp_get_default_widget_options());
		}
	}

	if(!function_exists('hicorp_get_default_page_widgets')){
		function hicorp_get_default_page_widgets(){
			if(class_exists('ecko_widget_blog_info')){ the_widget('ecko_widget_blog_info', array()); }
			if(class_exists('ecko_widget_latest_posts')){ the_widget('ecko_widget_latest_posts', array('title' => esc_html__('Latest Articles', 'hicorp'), 'postcount' => 5)); }
			if(class_exists('ecko_widget_random_posts')){ the_widget('ecko_widget_random_posts', array('title' => '', 'postcount' => 3)); }
			the_widget('WP_Widget_Categories', 'count=true', hicorp_get_default_widget_options());
			the_widget('WP_Widget_Archives', '', hicorp_get_default_widget_options());
		}
	}

	if(!function_exists('hicorp_get_default_footer_widgets')){
		function hicorp_get_default_footer_widgets(){
			the_widget('WP_Widget_Meta', '', hicorp_get_default_widget_options());
			the_widget('WP_Widget_Archives', '', hicorp_get_default_widget_options());
			the_widget('WP_Widget_Categories', 'count=true', hicorp_get_default_widget_options());
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* CATGEORY OPTIONS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_category_options')){
		function hicorp_category_options($tag){
			$category_meta_title = 'category_meta_' . $tag->term_id . '_color';
			$category_meta = get_option($category_meta_title);
			?>
			<tr class="form-field">
				<th scope="row" valign="top"><label for="category-color"><?php esc_html_e('Category HEX Color Value', 'hicorp'); ?></label></th>
				<td>
					<input id="category-color" name="<?php echo esc_attr($category_meta_title); ?>" value="<?php if(isset($category_meta)) echo esc_attr($category_meta); ?>" />
					<p class="description"><?php esc_html_e('Enter a color to associate with this category. The color must be in HEX format (E.g. 009bbb )', 'hicorp'); ?></p>
				</td>
			</tr>
			<?php
		}
	}
	add_action('edit_category_form_fields', 'hicorp_category_options');

	if(!function_exists('hicorp_save_category_options')){
		function hicorp_save_category_options($term_id){
			$category_meta_title = 'category_meta_' . $term_id . '_color';
			if(isset($_POST[$category_meta_title]) && !update_option($category_meta_title, $_POST[$category_meta_title])){
				add_option($category_meta_title, $_POST[$category_meta_title]);
			}
		}
	}
	add_action('edit_category', 'hicorp_save_category_options');


	/*-----------------------------------------------------------------------------------*/
	/* GET PAGE LAYOUT
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_page_layout')){
		function hicorp_get_page_layout(){
			if(ECKO_DEMO && isset($_COOKIE['layout'])){
				return $_COOKIE['layout'];
			}
			return get_theme_mod('layout_style', 'page-layout-standard');
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET POST CONETENTS (POST LIST)
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_post_contents')){
		function hicorp_get_post_contents(){
			global $post;
			if(get_theme_mod('postlist_use_excerpts', false)){
				the_excerpt();
			}else{
				the_content('', false, '');
			}
		}
	}

	/*-----------------------------------------------------------------------------------*/
	/* GET POPULAR CATEGORIES
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_popular_categories')){
		function hicorp_get_popular_categories(){
			return get_categories(array(
				'type' => 'post',
				'orderby' => 'count',
				'order' => 'DESC',
				'hide_empty' => 1,
				'number' => 5,
				'taxonomy' => 'category',
				'pad_counts' => false,
				'exclude' => '1'
				)
			);
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET POPULAR AUTHORS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_popular_authors')){
		function hicorp_get_popular_authors(){
			return get_users(array(
				'orderby' => 'post_count',
				'order' => 'DESC',
				'number' => 5,
				)
			);
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* COMMENT FORMATTING
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_comment_format')){
		function hicorp_comment_format($comment, $args, $depth){
			$GLOBALS['comment'] = $comment;
			?>
				<li <?php comment_class(); ?> id="comment-<?php echo esc_attr(comment_ID()); ?>">
					<div class="comment-contents">
						<div class="comment-profile">
							<a href="<?php comment_author_url(); ?>"><img src="https://0.gravatar.com/avatar/<?php echo esc_attr(md5($comment->comment_author_email)); ?>?s=96" class="comment-author-avatar" alt="<?php comment_author(); ?>"></a>
						</div>
						<div class="comment-main">
							<div class="comment-info">
								<section class="comment-meta">
									<div class="comment-left">
										<h4 class="comment-author">
											<a href="<?php comment_author_url(); ?>"><img src="https://0.gravatar.com/avatar/<?php echo esc_attr(md5($comment->comment_author_email)); ?>?s=24" class="comment-author-avatar-small" alt="<?php comment_author(); ?>"><i class="comment-is-author fa fa-user" title="<?php esc_attr_e('Author', 'hicorp'); ?>"></i><?php comment_author(); ?></a>
										</h4>
										<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
									</div>
									<div class="comment-right">
										<div class="comment-date"><time datetime="<?php comment_date('Y-m-d'); ?>"><?php comment_date(get_option('date_format')); ?></time></div>
									</div>
								</section>
							</div>
							<div class="comment-body">
								<?php comment_text(); ?>
							</div>
						</div>
					</div>
			<?php
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET POST CATGEORY MARKUP
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_category_markup')){
		function hicorp_get_category_markup($usespan = false, $postid = false){
			if(!$postid){
				global $post;
				$postid = $post->ID;
			}
			$post_category = get_the_category($postid);

			if($post_category){
				if($usespan){
					echo '<span class="post-category" style="background:#' . esc_attr(hicorp_get_category_color($postid)) . ';" data-category-color="#' . esc_attr(hicorp_get_category_color($postid)) . '">' . esc_html($post_category[0]->name) . '</span>';
				}else{
					echo '<a class="post-category category-fade" style="background:#' . esc_attr(hicorp_get_category_color($postid))  . ';" data-category-color="#' . esc_attr(hicorp_get_category_color($postid)) . '" href="' . esc_url(get_category_link($post_category[0]->term_id)) . '">' . esc_html($post_category[0]->name) . '</a>';
				}
			}
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET FOOTER BLOG IMAGE
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_footer_blog_image')){
		function hicorp_get_footer_blog_image(){
			if(get_theme_mod('layout_color_scheme', 'light-theme') == "light-theme"){
				if(get_theme_mod('general_blog_image')){
					return get_theme_mod('general_blog_image');
				}
				return false;
			}else{
				if(get_theme_mod('general_blog_light_image')){
					return get_theme_mod('general_blog_light_image');
				}
				return false;
			}
		}
	}

	/*-----------------------------------------------------------------------------------*/
	/* GET POST CATGEORY COLOR
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_category_color')){
		function hicorp_get_category_color($postid = false){
			if(!$postid){
				global $post;
				$postid = $post->ID;
			}
			$post_category = get_the_category($postid);
			if($post_category){
				$color_option = get_option('category_meta_' . $post_category[0]->term_id . '_color');
				if(empty($color_option)){ $color_option = '7fbb00'; };
				return $color_option;
			}
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET GRID POSTS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_featured_posts')){
		function hicorp_get_featured_posts(){
			$hicorp_featured_posts = array(
				'numberposts' => 3,
				'meta_key' => 'hicorp_post_feature',
				'meta_value' => 'yes'
			);
			return get_posts($hicorp_featured_posts);
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET DEFAULT HEADER BACKGROUND
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_header_background')){
		function hicorp_get_header_background(){
			if(is_single() || is_page()){
				global $post;
				$post_image = null;
				if(has_post_thumbnail()){
					$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'ecko_background_large');
					$post_image = $post_image[0];
				}
				return $post_image;
			}
			if(is_404() && get_theme_mod('error_background')){
				return get_theme_mod('error_background', '');
			}
			return get_theme_mod('layout_header_background', '');
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET GET FIRST FEATURED POST BACKGROUND
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_get_first_featured_post_background')){
		function hicorp_get_first_featured_post_background($featuredposts){
			if($featuredposts){
				$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($featuredposts[0]->ID), 'ecko_background_large');
				$post_image = $post_image[0];
				return $post_image;
			}
			return false;
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* MODIFY DEFAULT WIDGET MARKUP
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_list_categories')){
		function hicorp_list_categories($links){
			$links = str_replace('</a> (', '</a> <span class="count">', $links);
			$links = str_replace(')', '</span>', $links);
			return $links;
		}
	}
	add_filter('wp_list_categories', 'hicorp_list_categories');

	if(!function_exists('hicorp_list_archives')){
		function hicorp_list_archives($links){
			$links = str_replace('</a> (', '</a> <span class="count">', $links);
			$links = str_replace(')', '</span>', $links);
			return $links;
		}
	}
	add_filter('wp_list_archives', 'hicorp_list_archives');


	/*-----------------------------------------------------------------------------------*/
	/* GLOABL ACCESS: MULTIPAGE
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_global_multipage')){
		function hicorp_global_multipage(){
			global $multipage;
			return $multipage;
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GLOABL ACCESS: POST
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('hicorp_global_post')){
		function hicorp_global_post(){
			global $post;
			return $post;
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* THEME CUSTOMIZER SETTINGS
	/*-----------------------------------------------------------------------------------*/

	function hicorp_customize_register($wp_customize){

		/*
		 * Layout
		 */
		$wp_customize->add_section('layout_section',
			array(
				'title' => 'Layout',
				'description' => esc_attr__('This section contains theme layout options.', 'hicorp'),
				'priority' => 23,
			)
		);

		$wp_customize->add_setting('layout_style',
		array(
			'sanitize_callback' => 'ecko_sanitize_allow_html',
			'default' => 'page-layout-standard',
		));
		$wp_customize->add_control(
			'layout_style',
			array(
				'type' => 'radio',
				'label' => esc_attr__('Layout Style', 'hicorp'),
				'section' => 'layout_section',
				'choices' => array(
					'page-layout-standard' => esc_attr__('Standard (Sidebar)', 'hicorp'),
					'page-layout-masonry' => esc_attr__('Masonry', 'hicorp'),
					'page-layout-single' => esc_attr__('Single Column', 'hicorp'),
				),
			)
		);

		$wp_customize->add_setting('layout_color_scheme',
		array(
			'sanitize_callback' => 'ecko_sanitize_allow_html',
			'default' => 'light-theme',
		));
		$wp_customize->add_control(
			'layout_color_scheme',
			array(
				'type' => 'radio',
				'label' => esc_attr__('Color Scheme', 'hicorp'),
				'section' => 'layout_section',
				'choices' => array(
					'light-theme' => esc_attr__('Light Theme', 'hicorp'),
					'dark-theme' => esc_attr__('Dark Theme', 'hicorp'),
				),
			)
		);

		$wp_customize->add_setting('layout_header_background',
		array(
			'sanitize_callback' => 'ecko_sanitize_file_upload'
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control($wp_customize, 'layout_header_background',
				array(
					'label' => esc_attr__('Default Cover Background Image', 'hicorp'),
					'section' => 'layout_section',
					'settings' => 'layout_header_background'
				)
			)
		);


		/*
		 * Top Bar
		 */
		$wp_customize->add_section('topbar_section',
			array(
				'title' => 'Top Bar',
				'description' => esc_attr__('This section contains Top bar options.', 'hicorp'),
				'priority' => 23,
			)
		);

		$wp_customize->add_setting('topbar_sticky',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('topbar_sticky',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Stick to Top (on scroll)', 'hicorp'),
				'section' => 'topbar_section',
			)
		);

		$wp_customize->add_setting('topbar_hide_navigation',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('topbar_hide_navigation',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Navigation', 'hicorp'),
				'section' => 'topbar_section',
			)
		);

		$wp_customize->add_setting('topbar_logo',
		array(
			'sanitize_callback' => 'ecko_sanitize_file_upload'
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control($wp_customize, 'topbar_logo',
				array(
					'label' => esc_attr__('Top Bar Logo', 'hicorp'),
					'section' => 'topbar_section',
					'settings' => 'topbar_logo'
				)
			)
		);

		$wp_customize->add_setting('topbar_logo_retina',
		array(
			'sanitize_callback' => 'ecko_sanitize_file_upload'
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control($wp_customize, 'topbar_logo_retina',
				array(
					'label' => esc_attr__('Top Bar Logo (Retina - @2x file name)', 'hicorp'),
					'section' => 'topbar_section',
					'settings' => 'topbar_logo_retina'
				)
			)
		);


		/*
		 * Blog Cover
		 */
		$wp_customize->add_section('blogcover_section',
			array(
				'title' => 'Blog Cover',
				'description' => esc_attr__('This section contains Blog Cover options.', 'hicorp'),
				'priority' => 23,
			)
		);

		$wp_customize->add_setting('blogcover_logo',
		array(
			'sanitize_callback' => 'ecko_sanitize_file_upload'
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control($wp_customize, 'blogcover_logo',
				array(
					'label' => esc_attr__('Blog Cover Logo', 'hicorp'),
					'section' => 'blogcover_section',
					'settings' => 'blogcover_logo'
				)
			)
		);

		$wp_customize->add_setting('blogcover_logo_retina',
		array(
			'sanitize_callback' => 'ecko_sanitize_file_upload'
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control($wp_customize, 'blogcover_logo_retina',
				array(
					'label' => esc_attr__('Blog Cover Logo (Retina - @2x file name)', 'hicorp'),
					'section' => 'blogcover_section',
					'settings' => 'blogcover_logo_retina'
				)
			)
		);

		$wp_customize->add_setting('blogcover_hide_posts',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('blogcover_hide_posts',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Posts', 'hicorp'),
				'section' => 'blogcover_section',
			)
		);

		$wp_customize->add_setting('blogcover_hide_post_category',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('blogcover_hide_post_category',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Post Category', 'hicorp'),
				'section' => 'blogcover_section',
			)
		);

		$wp_customize->add_setting('blogcover_hide_frontpage',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('blogcover_hide_frontpage',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Frontpage Cover', 'hicorp'),
				'section' => 'blogcover_section',
			)
		);

		$wp_customize->add_setting('blogcover_basic',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('blogcover_basic',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Use Basic Style (Masonry & Standard)', 'hicorp'),
				'section' => 'blogcover_section',
			)
		);


		/*
		 * Filter Bar
		 */
		$wp_customize->add_section('filterbar_section',
			array(
				'title' => 'Filter Bar',
				'description' => esc_attr__('This section contains Filter Bar options.', 'hicorp'),
				'priority' => 23,
			)
		);

		$wp_customize->add_setting('filterbar_hide',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('filterbar_hide',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Filter Bar', 'hicorp'),
				'section' => 'filterbar_section',
			)
		);

		$wp_customize->add_setting('filterbar_hide_options',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('filterbar_hide_options',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Filter Options', 'hicorp'),
				'section' => 'filterbar_section',
			)
		);

		$wp_customize->add_setting('filterbar_hide_search',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('filterbar_hide_search',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Search', 'hicorp'),
				'section' => 'filterbar_section',
			)
		);



		/*
		 * POST LIST SECTION
		 */
		$wp_customize->add_section('postlist_section',
			array(
				'title' => 'Post List',
				'description' => esc_attr__('This section contains Post List options.', 'hicorp'),
				'priority' => 27,
			)
		);

		$wp_customize->add_setting('postlist_use_excerpts',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_use_excerpts',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Use Excerpts', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_category',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_category',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Category', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_author',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_author',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Author', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_date',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_date',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Date', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_meta',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_meta',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Meta', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_excerpt',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_excerpt',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Excerpt', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_readmore',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_readmore',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide \'Read More\'', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_comment_count',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_comment_count',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Comment Count', 'hicorp'),
				'section' => 'postlist_section',
			)
		);

		$wp_customize->add_setting('postlist_hide_likes',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postlist_hide_likes',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Likes', 'hicorp'),
				'section' => 'postlist_section',
			)
		);


		/*
		 * PAGINATION SECTION
		 */
		$wp_customize->add_section('pagination_section',
			array(
				'title' => 'Pagination',
				'description' => esc_attr__('This section contains Pagination options.', 'hicorp'),
				'priority' => 28,
			)
		);

		$wp_customize->add_setting('pagination_enable_ajax',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('pagination_enable_ajax',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Enable AJAX Post Loading', 'hicorp'),
				'section' => 'pagination_section',
			)
		);

		$wp_customize->add_setting('pagination_hide_older_newer',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('pagination_hide_older_newer',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide \'Older/Newer\' Buttons', 'hicorp'),
				'section' => 'pagination_section',
			)
		);

		$wp_customize->add_setting('pagination_hide_page_numbers',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('pagination_hide_page_numbers',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Page Numbers', 'hicorp'),
				'section' => 'pagination_section',
			)
		);


		/*
		 * POST PAGE SECTION
		 */
		$wp_customize->add_section('postpage_section',
			array(
				'title' => 'Post Page',
				'description' => esc_attr__('This section contains Post Page options.', 'hicorp'),
				'priority' => 29,
			)
		);

		$wp_customize->add_setting('postpage_hide_category',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_category',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Category', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_author',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_author',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Author', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_date',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_date',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Date', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_comment_count',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_comment_count',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Comment Count', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_likes',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_likes',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Likes', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_social_share',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_social_share',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Social Share', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_tags',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_tags',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Tags', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_related',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_related',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Related Posts', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_author_profile',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_author_profile',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Author Profile', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_comments',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_comments',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Comments', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_hide_next_prev_posts',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_hide_next_prev_posts',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide \'Next/Previous\' Posts', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_show_author_description',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('postpage_show_author_description',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Show Author Profile Description', 'hicorp'),
				'section' => 'postpage_section',
			)
		);

		$wp_customize->add_setting('postpage_default_layout',
		array(
			'sanitize_callback' => 'ecko_sanitize_allow_html',
			'default' => 'page-layout-default',
		));
		$wp_customize->add_control(
			'postpage_default_layout',
			array(
				'type' => 'radio',
				'label' => esc_attr__('Default Layout', 'hicorp'),
				'section' => 'postpage_section',
				'choices' => array(
					'page-layout-default' => esc_attr__('Default', 'hicorp'),
					'page-layout-standard' => esc_attr__('Sidebar', 'hicorp'),
					'page-layout-standard-left' => esc_attr__('Sidebar (Left)', 'hicorp'),
					'page-layout-single' => esc_attr__('Single Column', 'hicorp'),
				),
			)
		);


		/*
		 * CUSTOM PAGE SECTION
		 */
		$wp_customize->add_section('custompage_section',
			array(
				'title' => 'Custom Page',
				'description' => esc_attr__('This section contains Custom Page options.', 'hicorp'),
				'priority' => 31,
			)
		);

		$wp_customize->add_setting('custompage_hide_author',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_author',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Author Profile', 'hicorp'),
				'section' => 'custompage_section',
			)
		);

		$wp_customize->add_setting('custompage_hide_date',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_date',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Date', 'hicorp'),
				'section' => 'custompage_section',
			)
		);

		$wp_customize->add_setting('custompage_hide_comment_count',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_comment_count',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Comment Count', 'hicorp'),
				'section' => 'custompage_section',
			)
		);

		$wp_customize->add_setting('custompage_hide_meta',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_meta',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Meta', 'hicorp'),
				'section' => 'custompage_section',
			)
		);

		$wp_customize->add_setting('custompage_hide_social_share',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_social_share',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Social Share Options', 'hicorp'),
				'section' => 'custompage_section',
			)
		);

		$wp_customize->add_setting('custompage_hide_comments',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_comments',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Comments', 'hicorp'),
				'section' => 'custompage_section',
			)
		);

		$wp_customize->add_setting('custompage_hide_title',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('custompage_hide_title',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Page Title', 'hicorp'),
				'section' => 'custompage_section',
			)
		);


		/*
		 * SUBSCRIPTION (Footer) SECTION
		 */
		$wp_customize->add_section('subscription_section',
			array(
				'title' => esc_attr__('Subscription (Footer)', 'hicorp'),
				'description' => esc_attr__('This section contains inline post list subscription options.', 'hicorp'),
				'priority' => 32,
			)
		);

		$wp_customize->add_setting('subscription_enabled',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('subscription_enabled',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Enable Footer Subscription', 'hicorp'),
				'section' => 'subscription_section',
			)
		);

		$wp_customize->add_setting('subscription_title',
		array(
			'sanitize_callback' => 'ecko_sanitize_text'
		));
		$wp_customize->add_control('subscription_title',
			array(
				'label' => esc_attr__('Title', 'hicorp'),
				'section' => 'subscription_section',
				'type' => 'text',
			)
		);

		$wp_customize->add_setting('subscription_description',
		array(
			'sanitize_callback' => 'ecko_sanitize_text'
		));
		$wp_customize->add_control('subscription_description',
			array(
				'label' => esc_attr__('Description', 'hicorp'),
				'section' => 'subscription_section',
				'type' => 'text',
			)
		);

		$wp_customize->add_setting('subscription_embed_code',
		array(
			'sanitize_callback' => 'ecko_sanitize_allow_html'
		));
		$wp_customize->add_control('subscription_embed_code',
			array(
				'label' => esc_attr__('MailChimp Embed Code', 'hicorp'),
				'section' => 'subscription_section',
				'type' => 'text',
			)
		);


		/*
		 * FOOTER SECTION
		 */
		$wp_customize->add_section('footer_section',
			array(
				'title' => 'Footer',
				'description' => esc_attr__('This section contains Footer options.', 'hicorp'),
				'priority' => 33,
			)
		);

		$wp_customize->add_setting('footer_hide_footer',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('footer_hide_footer',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Footer', 'hicorp'),
				'section' => 'footer_section',
			)
		);

		$wp_customize->add_setting('footer_hide_widgets',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('footer_hide_widgets',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Widgets', 'hicorp'),
				'section' => 'footer_section',
			)
		);

		$wp_customize->add_setting('footer_hide_copyright',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('footer_hide_copyright',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Hide Copyright', 'hicorp'),
				'section' => 'footer_section',
			)
		);


		/*
		 * ADVERTS SECTION
		 */
		$wp_customize->add_section('adverts_section',
			array(
				'title' => 'Adverts & AdSense',
				'description' => esc_attr__('This section contains Advert & AdSense options. These options are supported on the Standard and Single-Column layouts.', 'hicorp'),
				'priority' => 34,
			)
		);

		$wp_customize->add_setting('adverts_enable',
		array(
			'sanitize_callback' => 'ecko_sanitize_checkbox'
		));
		$wp_customize->add_control('adverts_enable',
			array(
				'type' => 'checkbox',
				'label' => esc_attr__('Enable Advert/AdSense Support', 'hicorp'),
				'section' => 'adverts_section',
			)
		);

		$wp_customize->add_setting('adverts_occurance_rate',
		array(
			'sanitize_callback' => 'ecko_sanitize_int',
			'default' => 4
		));
		$wp_customize->add_control('adverts_occurance_rate',
			array(
				'type' => 'select',
				'label' => esc_attr__('Show Every (X) Posts', 'hicorp'),
				'section' => 'adverts_section',
				'choices' => array(
					2 => '2',
					3 => '3',
					4 => '4',
					5 => '5',
					6 => '6'
				),
			)
		);

		$wp_customize->add_setting('adverts_ad_code',
		array(
			'sanitize_callback' => 'ecko_sanitize_allow_html'
		));
		$wp_customize->add_control('adverts_ad_code',
			array(
				'type' => 'text',
				'label' => esc_attr__('Advert Emebed Code (728x90)', 'hicorp'),
				'section' => 'adverts_section',
			)
		);

		/*
		 * ADVERTS SECTION
		 */
		$wp_customize->add_section('error_section',
			array(
				'title' => 'Error Page',
				'description' => esc_attr__('This section contains Error Page options (e.g. 404).', 'hicorp'),
				'priority' => 35,
			)
		);

		$wp_customize->add_setting('error_background',
		array(
			'sanitize_callback' => 'ecko_sanitize_file_upload'
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control($wp_customize, 'error_background',
				array(
					'label' => esc_attr__('Error Cover Background Image', 'hicorp'),
					'section' => 'error_section',
					'settings' => 'error_background'
				)
			)
		);

	}
	add_action('customize_register', 'hicorp_customize_register');


	function hicorp_customize_css(){
		?>
			<style type="text/css">

				<?php // GENERAL ?>
				<?php if(get_theme_mod('general_disqus_plugin_support')){ ?>
					.post-meta-comments{ display: none !important; }
				<?php } ?>

				<?php // TOP BAR ?>
				<?php if(get_theme_mod('topbar_hide_navigation')){ ?>
					nav.navigation-main{ display: none; }
					nav.navigation-responsive{ display: none; }
				<?php } ?>

				<?php // BLOGCOVER ?>
				<?php if(get_theme_mod('blogcover_hide_posts')){ ?>
					.cover-blog-posts{ display: none; }
					.cover-load-indicator{ display: none; }
					.cover-blog-description{ bottom: 0; }
				<?php } ?>
				<?php if(get_theme_mod('blogcover_hide_post_category')){ ?>
					.cover-blog-posts .cover-post .post-category{ display: none; }
				<?php } ?>

				<?php // FILTER BAR ?>
				<?php if(get_theme_mod('filterbar_hide')){ ?>
					.filter-bar{ display: none; }
					.cover.cover-blog{ height: 100vh; }
				<?php } ?>
				<?php if(get_theme_mod('filterbar_hide_options')){ ?>
					.filter-bar .filter-bar-options{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('filterbar_hide_search')){ ?>
					.filter-bar .filter-bar-search{ display: none; }
				<?php } ?>

				<?php // POSTLIST ?>
				<?php if(get_theme_mod('postlist_hide_category')){ ?>
					.page-contents.post-list .post .post-category{ display: none; }
					.page-contents.post-list .post .post-info{ margin-top: 0 !important; }
					.page-contents.post-list .post .post-title{ margin-top: 0 !important; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_author')){ ?>
					.page-contents.post-list .post .post-author{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_date')){ ?>
					.page-contents.post-list .post .post-meta .post-meta-date{ display: none; }
					.page-contents.post-list-standard .post .post-date{ display: none; }
					.page-contents.post-list-standard .post .post-right-align{ width: 100%; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_meta')){ ?>
					.page-contents.post-list .post .post-meta{ display: none; }
					.page-contents.post-list-masonry .post .post-excerpt{ margin-bottom: 0; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_excerpt')){ ?>
					.page-contents.post-list .post .post-excerpt{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_readmore')){ ?>
					.page-contents.post-list .post .post-meta .post-read-more{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_comment_count')){ ?>
					.page-contents.post-list .post .post-meta .post-meta-comments{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postlist_hide_likes')){ ?>
					.page-contents.post-list .post .post-meta .post-meta-likes{ display: none; }
				<?php } ?>

				<?php // PAGINATION ?>
				<?php if(get_theme_mod('pagination_hide_older_newer')){ ?>
					.pagination-standard .pagination-button{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('pagination_hide_page_numbers')){ ?>
					.pagination-standard ul.page-numbers{ display: none; }
				<?php } ?>

				<?php // POST PAGE ?>
				<?php if(get_theme_mod('postpage_hide_category')){ ?>
					body.single .cover-content .post-category{ display: none; }
					body.single .post-body .post-category{ display: none; }
					body.single .post-body .post-title{ margin-top: 0; }
					body.single .post-footer .post-tags .post-category{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_author')){ ?>
					body.single .cover-content .post-meta .post-author{ display: none; }
					body.single .post-body .post-author{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_date')){ ?>
					body.single .cover-content .post-meta .post-date{ display: none; }
					body.single .post-body .post-date{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_comment_count')){ ?>
					body.single .cover-content .post-meta .post-comments{ display: none; }
					body.single .post-body .post-comments{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_likes')){ ?>
					body.single .cover-content .post-meta .post-likes{ display: none; }
					body.single .post-body .post-likes{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_social_share')){ ?>
					body.single .post-footer .post-share{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_tags')){ ?>
					body.single .post-footer .post-tags .tags{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_related')){ ?>
					body.single .post-related{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_author_profile')){ ?>
					body.single .post-author-profile{ display: none; }
					body.single .post-footer, body.single .post-share{ margin-bottom: 0; padding-bottom: 0; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_comments')){ ?>
					body.single .post-comments-body{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_hide_next_prev_posts')){ ?>
					body.single .footer-post-next{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('postpage_show_author_description')){ ?>
					body.single .post-author-profile .post-author-bio{ display: block; }
				<?php } ?>

				<?php // CUSTOM PAGE ?>
				<?php if(get_theme_mod('custompage_hide_author')){ ?>
					body.page .cover-content .post-meta .post-author{ display: none; }
					body.page .post-header .post-meta .post-author{ display: none; }
					body.page .post-author-profile{ display: none; }
					body.page .post-footer, body.page .post-share{ margin-bottom: 0; padding-bottom: 0; }
				<?php } ?>
				<?php if(get_theme_mod('custompage_hide_date')){ ?>
					body.page .cover-content .post-meta .post-date{ display: none; }
					body.page .post-header .post-meta .post-date{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('custompage_hide_comment_count')){ ?>
					body.page .cover-content .post-meta .post-comments{ display: none; }
					body.page .post-header .post-meta .post-comments{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('custompage_hide_meta')){ ?>
					body.page .cover-content .post-meta{ display: none; }
					body.page .post-header .post-meta{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('custompage_hide_social_share')){ ?>
					body.page .post-footer .post-share{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('custompage_hide_comments')){ ?>
					body.page .post-comments-body{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('custompage_hide_title')){ ?>
					body.page .post-header{ display: none; }
				<?php } ?>

				<?php // FOOTER ?>
				<?php if(get_theme_mod('footer_hide_footer')){ ?>
					footer.page-footer{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('footer_hide_widgets')){ ?>
					footer.page-footer .footer-widgets{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('footer_hide_copyright')){ ?>
					footer.page-footer .footer-copyright{ display: none; }
				<?php } ?>

				<?php // COPYRIGHT ?>
				<?php if(get_theme_mod('copyright_hide_disclaimer')){ ?>
					.footer-copyright-disclaimer{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('copyright_hide_wordpress')){ ?>
					.footer-copyright-disclaimer .wordpress{ display: none; }
				<?php } ?>
				<?php if(get_theme_mod('copyright_hide_ecko')){ ?>
					.footer-copyright-disclaimer .ecko{ display: none; }
				<?php } ?>

				<?php // COLORS ?>
				<?php if(get_theme_mod('color_enable_custom')){ ?>
					nav.navigation-main>ul>li.current-menu-item:after, nav.navigation-main>ul>li.menu-item-active:after, nav.navigation-main>div>ul>li.current-menu-item:after, nav.navigation-main>div>ul>li.menu-item-active:after{ background: <?php echo esc_attr(get_theme_mod('color_accent')); ?>; }
					.cover-load-indicator{ background: <?php echo esc_attr(get_theme_mod('color_accent')); ?>; }
					.page-contents.post-list-masonry .post .post-title a:hover{ color: <?php echo esc_attr(get_theme_mod('color_accent_dark')); ?>; }
					.pagination-load-more{ background: <?php echo esc_attr(get_theme_mod('color_accent')); ?>; }
					.pagination-load-more:hover{ background: <?php echo esc_attr(get_theme_mod('color_accent_dark')); ?>; }
				<?php } ?>

			 </style>
		<?php
	}
	add_action('wp_head', 'hicorp_customize_css');
