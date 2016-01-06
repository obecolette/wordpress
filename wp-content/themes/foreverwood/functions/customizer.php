<?php
/**
 * ForeverWood Theme Customizer.
 * @package ForeverWood
 * @since ForeverWood 2.0.0
*/

/**
 * Default values - backwards compatibility for older ForeverWood versions.
 *  
*/ 
$foreverwood_theme_options = get_option('foreverwood_options');

if ($foreverwood_theme_options != false) {
$foreverwood_defaults = array(
			'foreverwood_css' => $foreverwood_theme_options['foreverwood_css'],
			'foreverwood_layout_width' => $foreverwood_theme_options['foreverwood_layout_width'],
			'foreverwood_display_breadcrumb' => $foreverwood_theme_options['foreverwood_display_breadcrumb'],
			'foreverwood_display_sidebar' => $foreverwood_theme_options['foreverwood_display_sidebar'],
			'foreverwood_display_sidebar_archives' => $foreverwood_theme_options['foreverwood_display_sidebar_archives'],
			'foreverwood_header_layout' => $foreverwood_theme_options['foreverwood_header_layout'],
			'foreverwood_display_header_image' => $foreverwood_theme_options['foreverwood_display_header_image'],
			'foreverwood_page_title_width' => $foreverwood_theme_options['foreverwood_page_title_width'] . '%',
			'foreverwood_header_menu_width' => $foreverwood_theme_options['foreverwood_header_menu_width'] . '%',
			'foreverwood_logo_url' => $foreverwood_theme_options['foreverwood_logo_url'],
			'foreverwood_header_image_headline' => $foreverwood_theme_options['foreverwood_header_image_headline'],
			'foreverwood_header_image_link_url' => $foreverwood_theme_options['foreverwood_header_image_link_url'],
			'foreverwood_header_image_link_text' => $foreverwood_theme_options['foreverwood_header_image_link_text'],
			'foreverwood_display_image_post' => $foreverwood_theme_options['foreverwood_display_image_post'],
			'foreverwood_display_meta_post' => $foreverwood_theme_options['foreverwood_display_meta_post'],
			'foreverwood_next_preview_post' => $foreverwood_theme_options['foreverwood_next_preview_post'],
			'foreverwood_display_image_page' => $foreverwood_theme_options['foreverwood_display_image_page'],
			'foreverwood_post_entry_format' => $foreverwood_theme_options['foreverwood_post_entry_format'],
			'foreverwood_display_meta_post_entry' => $foreverwood_theme_options['foreverwood_display_meta_post_entry'],
			'foreverwood_content_archives' => $foreverwood_theme_options['foreverwood_content_archives'],
			'foreverwood_display_site_description' => $foreverwood_theme_options['foreverwood_display_site_description'],
			'foreverwood_body_google_fonts' => $foreverwood_theme_options['foreverwood_body_google_fonts'],
			'foreverwood_headings_google_fonts' => $foreverwood_theme_options['foreverwood_headings_google_fonts'],
			'foreverwood_headline_google_fonts' => $foreverwood_theme_options['foreverwood_headline_google_fonts'],
			'foreverwood_postentry_google_fonts' => $foreverwood_theme_options['foreverwood_postentry_google_fonts'],
			'foreverwood_sidebar_google_fonts' => $foreverwood_theme_options['foreverwood_sidebar_google_fonts'],
			'foreverwood_menu_google_fonts' => $foreverwood_theme_options['foreverwood_menu_google_fonts'],
			'foreverwood_own_css' => $foreverwood_theme_options['foreverwood_own_css'] );
} else {
$foreverwood_defaults = array(
			'foreverwood_css' => 'Orange (default)',
			'foreverwood_layout_width' => 'Wide',
			'foreverwood_display_breadcrumb' => 'Display',
			'foreverwood_display_sidebar' => 'Display',
			'foreverwood_display_sidebar_archives' => 'Display',
			'foreverwood_header_layout' => 'Centered',
			'foreverwood_display_header_image' => 'Everywhere',
			'foreverwood_page_title_width' => '50%',
			'foreverwood_header_menu_width' => '50%',
			'foreverwood_logo_url' => '',
			'foreverwood_header_image_headline' => '',
			'foreverwood_header_image_link_url' => '',
			'foreverwood_header_image_link_text' => '',
			'foreverwood_display_image_post' => 'Display',
			'foreverwood_display_meta_post' => 'Display',
			'foreverwood_next_preview_post' => 'Display',
			'foreverwood_display_image_page' => 'Display',
			'foreverwood_post_entry_format' => 'One Column',
			'foreverwood_display_meta_post_entry' => 'Display',
			'foreverwood_content_archives' => 'Excerpt',
			'foreverwood_display_site_description' => 'Display',
			'foreverwood_body_google_fonts' => 'default',
			'foreverwood_headings_google_fonts' => 'default',
			'foreverwood_headline_google_fonts' => 'default',
			'foreverwood_postentry_google_fonts' => 'default',
			'foreverwood_sidebar_google_fonts' => 'default',
			'foreverwood_menu_google_fonts' => 'default',
			'foreverwood_own_css' => '' );
}

function foreverwood_customize_register($wp_customize){

global $foreverwood_defaults;

$foreverwood_fonts = array(
			'default' => 'default',	
			'Abel' => 'Abel',			
			'Aclonica' => 'Aclonica',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Aldrich' => 'Aldrich',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
      'Amarante' => 'Amarante',
			'Amaranth' => 'Amaranth',
      'Andika' => 'Andika',
			'Antic' => 'Antic',
			'Arimo' => 'Arimo',	
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Brawler' => 'Brawler',
			'Buda' => 'Buda',	
      'Butcherman' => 'Butcherman',	
			'Cantarell' => 'Cantarell',	
      'Cherry Swash' => 'Cherry Swash',				
			'Chivo' => 'Chivo',			
			'Coda' => 'Coda',	
      'Concert One' => 'Concert One',		
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',			
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Didact Gothic' => 'Didact Gothic',
			'Dorsa' => 'Dorsa',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
      'Droid Serif' => 'Droid Serif',
			'EB Garamond' => 'EB Garamond',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Federo' => 'Federo',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
      'Gilda Display' => 'Gilda Display',
			'Give You Glory' => 'Give You Glory',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Gravitas One' => 'Gravitas One',
			'Gruppo' => 'Gruppo',
			'Hammersmith One' => 'Hammersmith One',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Inconsolata' => 'Inconsolata',
			'Indie Flower' => 'Indie Flower',
      'IM Fell English' => 'IM Fell English',
			'Irish Grover' => 'Irish Grover',
			'Irish Growler' => 'Irish Growler',
			'Istok Web' => 'Istok Web',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'La Belle Aurore' => 'La Belle Aurore',
      'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Lekton' => 'Lekton',
      'Lily Script One' => 'Lily Script One',
			'Limelight' => 'Limelight',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
      'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marvel' => 'Marvel',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
      'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miltonian' => 'Miltonian',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
      'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
      'Montaga' => 'Montaga',
			'Montez' => 'Montez',
      'Montserrat' => 'Montserrat',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Muli' => 'Muli',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
      'Open Sans' => 'Open Sans',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Ovo' => 'Ovo',
			'Pacifico' => 'Pacifico',
			'Passero One' => 'Passero One',
			'Patrick Hand' => 'Patrick Hand',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Philosopher' => 'Philosopher',
			'Play' => 'Play',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poller One' => 'Poller One',
			'Pompiere' => 'Pompiere',
			'Prata' => 'Prata',
			'Prociono' => 'Prociono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Puritan' => 'Puritan',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway', 
      'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
      'Reenie Beanie' => 'Reenie Beanie', 
      'Roboto' => 'Roboto',
      'Roboto Condensed' => 'Roboto Condensed',
			'Rock Salt' => 'Rock Salt',
			'Rochester' => 'Rochester',
			'Rokkitt' => 'Rokkitt',
			'Rosario' => 'Rosario',
			'Ruslan Display' => 'Ruslan Display',
      'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Schoolbell' => 'Schoolbell',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shanti' => 'Shanti',
			'Short Stack' => 'Short Stack',
			'Sigmar One' => 'Sigmar One',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spinnaker' => 'Spinnaker',
			'Stardos Stencil' => 'Stardos Stencil',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Tenor Sans' => 'Tenor Sans',
			'Terminal Dosis Light' => 'Terminal Dosis Light',
			'Tinos' => 'Tinos',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ultra' => 'Ultra',
      'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
      'Unkempt' => 'Unkempt',
			'Unna' => 'Unna',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'VT323' => 'VT323',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Zeyada' => 'Zeyada');
      
/**
 * Textarea custom control.
 *  
*/ 
class foreverwood_customize_textarea_control extends WP_Customize_Control {
    public $type = 'textarea'; 
    public function render_content() { ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
<?php }}

/**
 * Sections and Options.
 *  
*/     
    $wp_customize->add_section('foreverwood_general_settings', array(
        'title'    => __('ForeverWood General Settings', 'foreverwood'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('foreverwood_header_settings', array(
        'title'    => __('ForeverWood Header Settings', 'foreverwood'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('foreverwood_posts_settings', array(
        'title'    => __('ForeverWood Posts/Pages Settings', 'foreverwood'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('foreverwood_post_entries_settings', array(
        'title'    => __('ForeverWood Post Entries Settings', 'foreverwood'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('foreverwood_font_settings', array(
        'title'    => __('ForeverWood Font Settings', 'foreverwood'),
        'description' => '',
        'priority' => 160,
    ));
 
    //  =============================
    //  = Color Scheme              =
    //  =============================
    $wp_customize->add_setting('foreverwood_css', array(
        'default'        => $foreverwood_defaults['foreverwood_css'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_css_control', array(
        'label'      => __('Color Scheme', 'foreverwood'),
        'section'    => 'foreverwood_general_settings',
        'settings'   => 'foreverwood_css',
        'type'       => 'radio',
        'choices'    => array(
            'Orange (default)' => __( 'Orange (default)' , 'foreverwood' ),
            'Green' => __( 'Green' , 'foreverwood' ),
            'Red' => __( 'Red' , 'foreverwood' ),
        ),
    ));
    
    //  =============================
    //  = Layout Style              =
    //  =============================
    $wp_customize->add_setting('foreverwood_layout_width', array(
        'default'        => $foreverwood_defaults['foreverwood_layout_width'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_layout_width_control', array(
        'label'      => __('Layout Style', 'foreverwood'),
        'section'    => 'foreverwood_general_settings',
        'settings'   => 'foreverwood_layout_width',
        'type'       => 'radio',
        'choices'    => array(
            'Wide' => __( 'Wide' , 'foreverwood' ),
            'Boxed' => __( 'Boxed' , 'foreverwood' ),
        ),
    ));
    
    //  =================================
    //  = Display Breadcrumb Navigation =
    //  =================================
    $wp_customize->add_setting('foreverwood_display_breadcrumb', array(
        'default'        => $foreverwood_defaults['foreverwood_display_breadcrumb'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_breadcrumb_control', array(
        'label'      => __('Display Breadcrumb Navigation', 'foreverwood'),
        'section'    => 'foreverwood_general_settings',
        'settings'   => 'foreverwood_display_breadcrumb',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Posts/Pages =
    //  ==================================
    $wp_customize->add_setting('foreverwood_display_sidebar', array(
        'default'        => $foreverwood_defaults['foreverwood_display_sidebar'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_sidebar_control', array(
        'label'      => __('Display Sidebar on Posts/Pages', 'foreverwood'),
        'section'    => 'foreverwood_general_settings',
        'settings'   => 'foreverwood_display_sidebar',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Archives    =
    //  ==================================
    $wp_customize->add_setting('foreverwood_display_sidebar_archives', array(
        'default'        => $foreverwood_defaults['foreverwood_display_sidebar_archives'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_sidebar_archives_control', array(
        'label'      => __('Display Sidebar on Archives', 'foreverwood'),
        'section'    => 'foreverwood_general_settings',
        'settings'   => 'foreverwood_display_sidebar_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ==================================
    //  = Header Layout                  =
    //  ==================================
    $wp_customize->add_setting('foreverwood_header_layout', array(
        'default'        => $foreverwood_defaults['foreverwood_header_layout'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_header_layout_control', array(
        'label'      => __('Header Layout', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_header_layout',
        'type'       => 'radio',
        'choices'    => array(
            'Centered' => __( 'Centered' , 'foreverwood' ),
            'Wide' => __( 'Wide' , 'foreverwood' ),
        ),
    ));
    
    //  ==================================
    //  = Display Header Image           =
    //  ==================================
    $wp_customize->add_setting('foreverwood_display_header_image', array(
        'default'        => $foreverwood_defaults['foreverwood_display_header_image'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_header_image_control', array(
        'label'      => __('Display Header Image', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_display_header_image',
        'type'       => 'radio',
        'choices'    => array(
            'Everywhere' => __( 'Everywhere' , 'foreverwood' ),
            'Only on Homepage' => __( 'Only on Homepage' , 'foreverwood' ),
            'Everywhere except Homepage' => __( 'Everywhere except Homepage' , 'foreverwood' ),
        ),
    ));
    
    //  =================================
    //  = Title Box/Logo width          =
    //  =================================
    $wp_customize->add_setting('foreverwood_page_title_width', array(
        'default'        => $foreverwood_defaults['foreverwood_page_title_width'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_page_title_width_control', array(
        'label'      => __('Title Box/Logo width (in Wide Header Layout)', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_page_title_width',
        'type'       => 'radio',
        'choices'    => array(
            '100%' => '100%',
            '90%' => '90%',
            '80%' => '80%',
            '70%' => '70%',
            '60%' => '60%',
            '50%' => '50%',
            '40%' => '40%',
            '30%' => '30%',
            '20%' => '20%',
            '10%' => '10%',
            '0%' => '0%',
        ),
    ));
    
    //  =================================
    //  = Menu Box width                =
    //  =================================
    $wp_customize->add_setting('foreverwood_header_menu_width', array(
        'default'        => $foreverwood_defaults['foreverwood_header_menu_width'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_header_menu_width_control', array(
        'label'      => __('Menu Box width (in Wide Header Layout)', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_header_menu_width',
        'type'       => 'radio',
        'choices'    => array(
            '100%' => '100%',
            '90%' => '90%',
            '80%' => '80%',
            '70%' => '70%',
            '60%' => '60%',
            '50%' => '50%',
            '40%' => '40%',
            '30%' => '30%',
            '20%' => '20%',
            '10%' => '10%',
            '0%' => '0%',
        ),
    ));
    
    //  =============================
    //  = Header Logo               =
    //  =============================
    $wp_customize->add_setting('foreverwood_logo_url', array(
        'default'        => $foreverwood_defaults['foreverwood_logo_url'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_uri',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'foreverwood_logo_url_control', array(
        'label'    => __('Header Logo', 'foreverwood'),
        'section'  => 'foreverwood_header_settings',
        'settings' => 'foreverwood_logo_url',
    )));
    
    //  =============================
    //  = Header Image Headline     =
    //  =============================
    $wp_customize->add_setting('foreverwood_header_image_headline', array(
        'default'        => $foreverwood_defaults['foreverwood_header_image_headline'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_header_image_headline_control', array(
        'label'      => __('Homepage Header Image Headline', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_header_image_headline',
    ));
    
    //  =============================
    //  = Header Image Link URL     =
    //  =============================
    $wp_customize->add_setting('foreverwood_header_image_link_url', array(
        'default'        => $foreverwood_defaults['foreverwood_header_image_link_url'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_uri',
    ));
 
    $wp_customize->add_control('foreverwood_header_image_link_url_control', array(
        'label'      => __('Homepage Header Image Link URL', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_header_image_link_url',
    ));
    
    //  =============================
    //  = Header Image Link Text    =
    //  =============================
    $wp_customize->add_setting('foreverwood_header_image_link_text', array(
        'default'        => $foreverwood_defaults['foreverwood_header_image_link_text'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_header_image_link_text_control', array(
        'label'      => __('Homepage Header Image Link Text', 'foreverwood'),
        'section'    => 'foreverwood_header_settings',
        'settings'   => 'foreverwood_header_image_link_text',
    ));
    
    //  ==========================================
    //  = Display Featured Image on single posts =
    //  ==========================================
    $wp_customize->add_setting('foreverwood_display_image_post', array(
        'default'        => $foreverwood_defaults['foreverwood_display_image_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_image_post_control', array(
        'label'      => __('Display Featured Image on single posts', 'foreverwood'),
        'section'    => 'foreverwood_posts_settings',
        'settings'   => 'foreverwood_display_image_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on single posts =
    //  ====================================
    $wp_customize->add_setting('foreverwood_display_meta_post', array(
        'default'        => $foreverwood_defaults['foreverwood_display_meta_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_meta_post_control', array(
        'label'      => __('Display Meta Box on single posts', 'foreverwood'),
        'section'    => 'foreverwood_posts_settings',
        'settings'   => 'foreverwood_display_meta_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  =================================
    //  = Next/Previous Post Navigation =
    //  =================================
    $wp_customize->add_setting('foreverwood_next_preview_post', array(
        'default'        => $foreverwood_defaults['foreverwood_next_preview_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_next_preview_post_control', array(
        'label'      => __('Display Next/Previous Post Navigation on single posts', 'foreverwood'),
        'section'    => 'foreverwood_posts_settings',
        'settings'   => 'foreverwood_next_preview_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ==========================================
    //  = Display Featured Image on pages        =
    //  ==========================================
    $wp_customize->add_setting('foreverwood_display_image_page', array(
        'default'        => $foreverwood_defaults['foreverwood_display_image_page'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_image_page_control', array(
        'label'      => __('Display Featured Image on pages', 'foreverwood'),
        'section'    => 'foreverwood_posts_settings',
        'settings'   => 'foreverwood_display_image_page',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ==================================
    //  = Post Entries Format            =
    //  ==================================
    $wp_customize->add_setting('foreverwood_post_entry_format', array(
        'default'        => $foreverwood_defaults['foreverwood_post_entry_format'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_post_entry_format_control', array(
        'label'      => __('Post Entries Format', 'foreverwood'),
        'section'    => 'foreverwood_post_entries_settings',
        'settings'   => 'foreverwood_post_entry_format',
        'type'       => 'radio',
        'choices'    => array(
            'One Column' => __( 'One Column' , 'foreverwood' ),
            'Grid - Masonry' => __( 'Grid - Masonry' , 'foreverwood' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on Post Entries =
    //  ====================================
    $wp_customize->add_setting('foreverwood_display_meta_post_entry', array(
        'default'        => $foreverwood_defaults['foreverwood_display_meta_post_entry'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_meta_post_entry_control', array(
        'label'      => __('Display Meta Box on Post Entries', 'foreverwood'),
        'section'    => 'foreverwood_post_entries_settings',
        'settings'   => 'foreverwood_display_meta_post_entry',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  ===============================
    //  = Content/Excerpt Displaying  =
    //  ===============================
    $wp_customize->add_setting('foreverwood_content_archives', array(
        'default'        => $foreverwood_defaults['foreverwood_content_archives'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_content_archives_control', array(
        'label'      => __('Content/Excerpt Displaying', 'foreverwood'),
        'section'    => 'foreverwood_post_entries_settings',
        'settings'   => 'foreverwood_content_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Excerpt' => __( 'Excerpt' , 'foreverwood' ),
            'Content' => __( 'Content' , 'foreverwood' ),
        ),
    ));
    
    //  ====================================
    //  = Display Site Description         =
    //  ====================================
    $wp_customize->add_setting('foreverwood_display_site_description', array(
        'default'        => $foreverwood_defaults['foreverwood_display_site_description'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
    ));
 
    $wp_customize->add_control('foreverwood_display_site_description_control', array(
        'label'      => __('Display Site Description on Latest Posts (Blog) page', 'foreverwood'),
        'section'    => 'foreverwood_post_entries_settings',
        'settings'   => 'foreverwood_display_site_description',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'foreverwood' ),
            'Hide' => __( 'Hide' , 'foreverwood' ),
        ),
    ));
    
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('foreverwood_body_google_fonts', array(
        'default'        => $foreverwood_defaults['foreverwood_body_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
 
    ));
    $wp_customize->add_control( 'foreverwood_body_google_fonts_control', array(
        'settings' => 'foreverwood_body_google_fonts',
        'label'   => __('Body font', 'foreverwood'),
        'section' => 'foreverwood_font_settings',
        'type'    => 'select',
        'choices'    => $foreverwood_fonts,
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('foreverwood_headings_google_fonts', array(
        'default'        => $foreverwood_defaults['foreverwood_headings_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
 
    ));
    $wp_customize->add_control( 'foreverwood_headings_google_fonts_control', array(
        'settings' => 'foreverwood_headings_google_fonts',
        'label'   => __('Site Title font', 'foreverwood'),
        'section' => 'foreverwood_font_settings',
        'type'    => 'select',
        'choices'    => $foreverwood_fonts,
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('foreverwood_headline_google_fonts', array(
        'default'        => $foreverwood_defaults['foreverwood_headline_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
 
    ));
    $wp_customize->add_control( 'foreverwood_headline_google_fonts_control', array(
        'settings' => 'foreverwood_headline_google_fonts',
        'label'   => __('Page/Post Headlines (h1 - h6) font', 'foreverwood'),
        'section' => 'foreverwood_font_settings',
        'type'    => 'select',
        'choices'    => $foreverwood_fonts,
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('foreverwood_postentry_google_fonts', array(
        'default'        => $foreverwood_defaults['foreverwood_postentry_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
 
    ));
    $wp_customize->add_control( 'foreverwood_postentry_google_fonts_control', array(
        'settings' => 'foreverwood_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'foreverwood'),
        'section' => 'foreverwood_font_settings',
        'type'    => 'select',
        'choices'    => $foreverwood_fonts,
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('foreverwood_sidebar_google_fonts', array(
        'default'        => $foreverwood_defaults['foreverwood_sidebar_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
 
    ));
    $wp_customize->add_control( 'foreverwood_sidebar_google_fonts_control', array(
        'settings' => 'foreverwood_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'foreverwood'),
        'section' => 'foreverwood_font_settings',
        'type'    => 'select',
        'choices'    => $foreverwood_fonts,
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('foreverwood_menu_google_fonts', array(
        'default'        => $foreverwood_defaults['foreverwood_menu_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'foreverwood_sanitize_text',
 
    ));
    $wp_customize->add_control( 'foreverwood_menu_google_fonts_control', array(
        'settings' => 'foreverwood_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'foreverwood'),
        'section' => 'foreverwood_font_settings',
        'type'    => 'select',
        'choices'    => $foreverwood_fonts,
    ));
    
    //  =============================
    //  = Custom CSS                =
    //  =============================
    $wp_customize->add_setting('foreverwood_own_css', array(
        'default'        => $foreverwood_defaults['foreverwood_own_css'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
 
    $wp_customize->add_control( new foreverwood_customize_textarea_control($wp_customize, 'foreverwood_own_css_control', array(
        'label'    => __('Custom CSS', 'foreverwood'),
        'section'  => 'foreverwood_general_settings',
        'settings' => 'foreverwood_own_css',
    )));
}

add_action('customize_register', 'foreverwood_customize_register');

/**
 * Sanitize URIs
*/
function foreverwood_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function foreverwood_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field( $str);
} ?>