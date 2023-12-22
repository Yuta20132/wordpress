<?php
/**
 * Corporate Lite Theme Customizer
 *
 * @package Corporate Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function corporate_lite_customize_register( $wp_customize ) {

function corporate_lite_format_for_editor( $text, $default_editor = null ) {
    if ( $text ) {
        $text = htmlspecialchars( $text, ENT_NOQUOTES, get_option( 'blog_charset' ) );
    }
 
    /**
     * Filter the text after it is formatted for the editor.
     *
     * @since 4.3.0
     *
     * @param string $text The formatted text.
     */
    return apply_filters( 'corporate_lite_format_for_editor', $text, $default_editor );
}

//Add a class for titles
    class corporate_lite_info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3 style="text-decoration: underline; color: #DA4141; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	$wp_customize->remove_control('header_textcolor');
	
	
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#29c9fd',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','corporate-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	$wp_customize->add_setting('topbar_color', array(
		'default' => '#222222',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'topbar_color',array(
			'description' => __('Select background color for topbar','corporate-lite'),
			'section' => 'colors',
			'settings' => 'topbar_color'
		))
	);
	
	$wp_customize->add_setting('greystrip_color', array(
		'default' => '#313131',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'greystrip_color',array(
			'description' => __('Select background color for below slider strip','corporate-lite'),
			'section' => 'colors',
			'settings' => 'greystrip_color'
		))
	);
	
	$wp_customize->add_setting('footer_color', array(
		'default' => '#222222',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'footer_color',array(
			'description' => __('Select background color for footer','corporate-lite'),
			'section' => 'colors',
			'settings' => 'footer_color'
		))
	);
	
	$wp_customize->add_section('headercont_section',array(
		'title'	=> __('Topbar Contact','corporate-lite'),
		'description'	=> __('Add topbar contact details here','corporate-lite'),
		'priority'	=> null
	));
	
	$wp_customize->add_setting('cont_phone',array(
		'default'	=> '+1 500 000 0000',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('cont_phone',array(
		'label'	=> __('Add contact number','corporate-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'cont_phone',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('cont_email',array(
		'default'	=> 'demo@example.com',
		'sanitize_callback'	=> 'sanitize_email'
	));
	
	$wp_customize->add_control('cont_email',array(
		'label'	=> __('Add email address here','corporate-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'cont_email',
		'type'		=> 'text'
	));
	
	$wp_customize->add_section('greystrip_sec',array(
		'title'	=> __('Grey Strip Below Slider','corporate-lite'),
		'description'	=> __('Add below slider grey stip content','corporate-lite'),
		'priority'		=> null
	));
	
	$wp_customize->add_setting('greystrip_text',array(
		'default'	=> __('Welcome to Corporate Lite. all you\'ll ever need to build incredible website that stands out from the crowd','corporate-lite'),
		'sanitize_callback'	=> 'corporate_lite_format_for_editor'
	));
	
	$wp_customize->add_control('greystrip_text',array(
		'label'	=> __('Add text here','corporate-lite'),
		'section'	=> 'greystrip_sec',
		'setting'	=> 'greystrip_text',
		'type'		=> 'textarea'
	));
	
	$wp_customize->add_setting('greystrip_btn',array(
		'default'	=> 'Contact Us',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('greystrip_btn',array(
		'label'	=> __('Add button text here','corporate-lite'),
		'section'	=> 'greystrip_sec',
		'setting'	=> 'greystrip_btn',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('greystrip_link',array(
		'default'	=> '#',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('greystrip_link',array(
		'label'	=> __('Add link here','corporate-lite'),
		'section'	=> 'greystrip_sec',
		'setting'	=> 'greystrip_link',
		'type'		=> 'text'
	));
	
	$wp_customize->add_section('homepage_sec',array(
		'title'	=> __('Homepage Sections','corporate-lite'),
		'description'	=> __('Add homepage sections content here.','corporate-lite'),
	));
	
	$wp_customize->add_setting('section1_title',array(
		'default'	=> __('Hey!','corporate-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('section1_title',array(
		'label'	=> __('Add title for section.','corporate-lite'),
		'section'	=> 'homepage_sec',
		'setting'	=> 'section1_title',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('section1_subtitle',array(
		'default'	=> __('We are Simple Builder, your new business partner','corporate-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('section1_subtitle',array(
		'label'	=> __('Add sub title for section.','corporate-lite'),
		'section'	=> 'homepage_sec',
		'setting'	=> 'section1_subtitle',
		'type'		=> 'text'
	));
	
	// Page settings 	
	$wp_customize->add_setting(
    'page-setting1',
		array(
			'sanitize_callback' => 'corporate_lite_sanitize_integer',
		)
	);
 
	$wp_customize->add_control(
		'page-setting1',
		array(
			'type' => 'dropdown-pages',
			'label' => __('Choose a page for box one:','corporate-lite'),
			'section' => 'homepage_sec',
		)
	);
	
	$wp_customize->add_setting(
    'page-setting2',
		array(
			'sanitize_callback' => 'corporate_lite_sanitize_integer',
		)
	);
	
	$wp_customize->add_control(
		'page-setting2',
		array(
			'type' => 'dropdown-pages',
			'label' => __('Choose a page for box Two:','corporate-lite'),
			'section' => 'homepage_sec',
		)
	);
	
	$wp_customize->add_setting(
    'page-setting3',
		array(
			'sanitize_callback' => 'corporate_lite_sanitize_integer',
		)
	);
	
	$wp_customize->add_control(
		'page-setting3',
		array(
			'type' => 'dropdown-pages',
			'label' => __('Choose a page for box Three:','corporate-lite'),
			'section' => 'homepage_sec',
		)
	);
	
	$wp_customize->add_setting(
    'page-setting4',
		array(
			'sanitize_callback' => 'corporate_lite_sanitize_integer',
		)
	);
	
	$wp_customize->add_control(
		'page-setting4',
		array(
			'type' => 'dropdown-pages',
			'label' => __('Choose a page for box Four:','corporate-lite'),
			'section' => 'homepage_sec',
		)
	);

	
	$wp_customize->add_section('slider_section',array(
		'title'	=> __('Slider Settings','corporate-lite'),
		'description'	=> __('Add slider images here.','corporate-lite'),
		'priority'		=> null
	));
	
	// Slide Image 1
	$wp_customize->add_setting('slide_image1',array(
		'default'	=> get_template_directory_uri().'/images/slides/slider1.jpg',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'slide_image1',
        array(
            'label' => __('Slide Image 1 (1440x700)','corporate-lite'),
            'section' => 'slider_section',
            'settings' => 'slide_image1'
        )
    )
);

	$wp_customize->add_setting('slide_title1',array(
		'default'	=> __('Responsive Design','corporate-lite'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('slide_title1',array(
		'label'	=> __('Slide Title 1','corporate-lite'),
		'section'	=> 'slider_section',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('slide_desc1',array(
		'default'	=> __('This is description for slider one.','corporate-lite'),
		'sanitize_callback'	=> 'corporate_lite_format_for_editor',
	));
	
	$wp_customize->add_control('slide_desc1',array(
				'label' => __('Slide Description 1','corporate-lite'),
				'section' => 'slider_section',
				'setting'	=> 'slide_desc1',
				'type'	=> 'textarea'
		)
	);
	
	$wp_customize->add_setting('slide_link1',array(
		'default'	=> '#link1',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('slide_link1',array(
		'label'	=> __('Slide Link 1','corporate-lite'),
		'section'	=> 'slider_section',
		'type'		=> 'text'
	));
	
	// Slide Image 2
	$wp_customize->add_setting('slide_image2',array(
		'default'	=> get_template_directory_uri().'/images/slides/slider2.jpg',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'slide_image2',
        array(
            'label' => __('Slide Image 2 (1440x700)','corporate-lite'),
            'section' => 'slider_section',
            'settings' => 'slide_image2'
        )
    )
);

	$wp_customize->add_setting('slide_title2',array(
		'default'	=> __('Flexible Design','corporate-lite'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('slide_title2',array(
		'label'	=> __('Slide Title 2','corporate-lite'),
		'section'	=> 'slider_section',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('slide_desc2',array(
		'default'	=> __('This is description for slide two','corporate-lite'),
		'sanitize_callback'	=> 'corporate_lite_format_for_editor',
	));
	
	$wp_customize->add_control('slide_desc2',array(
				'label' => __('Slide Description 2','corporate-lite'),
				'section' => 'slider_section',
				'setting'	=> 'slide_desc2',
				'type'		=> 'textarea'
		)
	);
	
	$wp_customize->add_setting('slide_link2',array(
		'default'	=> '#link2',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('slide_link2',array(
		'label'	=> __('Slide Link 2','corporate-lite'),
		'section'	=> 'slider_section',
		'type'		=> 'text'
	));
	
	// Slide Image 3
	$wp_customize->add_setting('slide_image3',array(
		'default'	=> get_template_directory_uri().'/images/slides/slider3.jpg',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'slide_image3',
        array(
            'label' => __('Slide Image 3 (1440x700)','corporate-lite'),
            'section' => 'slider_section',
            'settings' => 'slide_image3'
        )
    )
);

	$wp_customize->add_setting('slide_title3',array(
		'default'	=> __('Awesome Features','corporate-lite'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('slide_title3',array(
		'label'	=> __('Slide Title 3','corporate-lite'),
		'section'	=> 'slider_section',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('slide_desc3',array(
		'default'	=> __('This is description for slide three','corporate-lite'),
		'sanitize_callback'	=> 'corporate_lite_format_for_editor',
	));
	
	$wp_customize->add_control('slide_desc3',array(
				'label' => __('Slide Description 3','corporate-lite'),
				'section' => 'slider_section',
				'setting'	=> 'slide_desc3',
				'type'		=> 'textarea'
		)
	);
	
	$wp_customize->add_setting('slide_link3',array(
		'default'	=> '#link3',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	
	$wp_customize->add_control('slide_link3',array(
		'label'	=> __('Slide Link 3','corporate-lite'),
		'section'	=> 'slider_section',
		'type'		=> 'text'
	));
	
	$wp_customize->add_section('footer_section',array(
		'title'	=> __('Footer Text','corporate-lite'),
		'description'	=> __('Add some text for footer like copyright etc.','corporate-lite'),
		'priority'	=> null
	));
	
	$wp_customize->add_setting('footer_copy',array(
		'default'	=> __('Corporate Lite 2017 | All Rights Reserved.','corporate-lite'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('footer_copy',array(
		'label'	=> __('Copyright Text','corporate-lite'),
		'section'	=> 'footer_section',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('corporate_lite_options[credit-info]', array(
			'sanitize_callback' => 'sanitize_text_field',
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control( new corporate_lite_info( $wp_customize, 'cred_section', array(
        'section' => 'footer_section',
        'settings' => 'corporate_lite_options[credit-info]',
        ) )
    );
	
}
add_action( 'customize_register', 'corporate_lite_customize_register' );

//Integer
function corporate_lite_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}	

function corporate_lite_css(){
		?>
        <style>
				a, 
				.tm_client strong,
				#footer ul li:hover a, 
				#footer ul li.current_page_item a,
				.postmeta a:hover,
				.footer-menu ul li a:hover,
				#sidebar ul li a:hover,
				.blog-post h3.entry-title,
				.woocommerce ul.products li.product .price,
				.services-box h2:hover{
					color:<?php echo esc_html(get_theme_mod('color_scheme','#29c9fd')); ?>;
				}
				a.blog-more:hover,
				.pagination ul li .current, 
				.pagination ul li a:hover,
				#commentform input#submit,
				input.search-submit,
				.nivo-controlNav a.active,
				.top-right .social-icons a:hover,
				.blog-date .date{
					background-color:<?php echo esc_html(get_theme_mod('color_scheme','#29c9fd')); ?>;
				}
				.top-bar{background-color:<?php echo esc_html(get_theme_mod('topbar_color','#222222')); ?>;}
				.grey-strip{background-color:<?php echo esc_html(get_theme_mod('greystrip_color','#313131')); ?>;}
				.copyright-wrapper{background-color:<?php echo esc_html(get_theme_mod('footer_color','#222222')); ?>;}
				
			
		</style>
	<?php }
add_action('wp_head','corporate_lite_css');

function corporate_lite_customize_preview_js() {
	wp_enqueue_script( 'corporate-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'corporate_lite_customize_preview_js' );