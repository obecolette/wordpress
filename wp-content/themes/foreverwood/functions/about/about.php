<?php
/**
 * About ForeverWood admin page framework.
 * @package ForeverWood
 * @since ForeverWood 2.0.0
*/   

add_action('admin_init', 'foreverwood_about_setup');
function foreverwood_about_setup() {
$foreverwood_about = array (

array( "name" => __( 'ForeverWood' , 'foreverwood' ),
	"type" => "title"),

array( "type" => "open"),

// Start Tabs
array( "name" => "Start Tabs",
		"type" => "tabs-open",
		"icon" => "layout"),

	// Home
	array( "name" => __( '<i class="icon_house" aria-hidden="true"></i>Welcome' , 'foreverwood' ),
			"id" => "tab_menu_0",
			"type" => "tab",
			"icon" => "layout",
			"class" => " selected first"),

  // Get Premium
	array( "name" => __( '<i class="icon_cart" aria-hidden="true"></i>GET PREMIUM' , 'foreverwood' ),
			"type" => "tab",
			"id" => "tab_menu_1",
			"class" => ""),
	
array( "name" => "Close Tabs",
		"type" => "tabs-close",
		"icon" => "layout"),


array( "name" => "Start Container",
		"type" => "container-open",
		"icon" => "layout"),

array( "name" => "tab_content_0",
		"type" => "tabcontent-open",
		"display" => "block",
		"icon" => "layout"),

	// Home
	array( "name" => __( 'Welcome to ForeverWood!' , 'foreverwood' ),
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => __( 'First of all, I would like to thank you for choosing the ForeverWood theme! I firmly believe that you will be satisfied with this template.' , 'foreverwood' ),
		"type" => "infotext"),
	
	array( "name" => __( 'About ForeverWood' , 'foreverwood' ),
		"type" => "heading",
		"icon" => "layout"),
	
	array("name" => __( 'ForeverWood is an easily customizable WordPress multipurpose theme. It is a fully responsive theme that allows for easy viewing on any device.' , 'foreverwood' ),
		"type" => "infotext"),
    
	array("name" => __( 'Since version 2.0.0, the Theme Options have been moved to the <a href="customize.php">Customizer</a>.' , 'foreverwood' ),
		"type" => "infotext"),

  array( "name" => "tab_content_0",
		"type" => "tabcontent-close",
		"icon" => "layout"),
// Close Home

// Open Get Premium
array( "name" => "tab_content_1",
		"type" => "tabcontent-open",
		"display" => "none",
		"icon" => "layout"),

	array( "name" => __( 'Get ForeverWood Premium Version' , 'foreverwood' ),
		"type" => "heading",
		"icon" => "layout"),
		
  array( "type" => "infotext",
		"name" => __( 'If you would like to purchase the ForeverWood Premium Version, you can do so on <a href="http://www.tomastoman.cz/downloads/foreverwood/" target="_blank">Developers Official Website</a>.' , 'foreverwood' )),
    
  array( "type" => "infotext",
		"name" => __( '<strong>What the ForeverWood Premium Version offers in addition?</strong><br />
    - Support for Drag-and-drop Page Builder with 39 in-built widgets for creating custom page layouts<br />
    - 7 pre-defined color schemes (Blue, Green, Orange, Pink, Purple, Red and Turquoise)<br />
    - Unlimited ability to create custom Color scheme (unlimited color settings)<br />
    - Ability to set different Header Images for the individual pages/posts<br />
    - Ability to set different Sidebars/Footers for the individual pages/posts<br />
    - Image Slideshow with 4 different templates<br />
    - Font size settings<br />
    - Post Formats support (Aside, Audio, Image, Standard, Status, Video)<br />
    - Related Posts box on the single posts<br />
    - 4 dynamic Hover effects for the Post Thumbnails (Fade, Focus, Shadow and Tilt)<br />
    - 6 Custom widgets for displaying the latest posts from the specific categories (as a Column, Grid, List, Slider, Thumbnails and by Default - One Column)<br />
    - Custom Tab Widget (displays popular posts, recent posts, comments and tags in tabbed format)<br />
    - Box-Image Custom widget (displays full-screen image sections)<br />
    - Box-Info Custom widget (displays a text box with an icon)<br />
    - Box-Presentation Custom widget (displays a text box with an image)<br />
    - Social Network Profile links in header (69 pre-defined icons)<br />
    - Facebook Like Box Custom widget<br />
    - Twitter Following Custom widget<br />
    - Integrated Facebook/Twitter/Google+1 share buttons on posts/pages/post entries<br />
    - Integrated automatic Sitemap generator with advanced options<br />
    - Custom Shortcodes for adding buttons, images, slideshows, tables and highlighted texts anywhere you like<br />
    - Custom Shortcode for displaying Google maps<br />
    - Custom Shortcode for displaying specific listing of posts anywhere you like<br />
    - 7 Custom Page templates<br />
    - Ability to add custom JavaScript code' , 'foreverwood' )),
    
  array( "name" => "tab_content_1",
		"type" => "tabcontent-close",
		"icon" => "layout"),
    
// Close Get Premium

array("name" => "Close Container",
		"type" => "container-close",
		"icon" => "layout"),

array( "type" => "close") 
); return $foreverwood_about; }

add_action('admin_head', 'foreverwood_admin_css');

function foreverwood_admin_css() { ?>
     
	<script language="JavaScript">
		jQuery.noConflict();
		jQuery(document).ready(function($) {
	
		$(".tabs .tab[id^=tab_menu]").click(function() {
			var curMenu=$(this);
			$(".tabs .tab[id^=tab_menu]").removeClass("selected");
			curMenu.addClass("selected");
	
			var index=curMenu.attr("id").split("tab_menu_")[1];
			$(".curvedContainer .tabcontent").css("display","none");
			$(".curvedContainer #tab_content_"+index).css("display","block");
		});
	});
	</script>

<?php }
function foreverwood_add_admin() {
	add_theme_page( __( 'About ForeverWood' , 'foreverwood' ), __( 'About ForeverWood' , 'foreverwood' ), 'edit_theme_options', 'about.php', 'foreverwood_admin', '', '1' );
}

function foreverwood_admin() {
$foreverwood_about = foreverwood_about_setup(); 
  wp_enqueue_style('foreverwood-framework-style', get_template_directory_uri() . '/functions/about/css.css');
  wp_enqueue_style('foreverwood-framework-icons', get_template_directory_uri() . '/css/elegantfont.css');
  $foreverwood_manualurl = get_template_directory_uri() . '/docs/documentation.html';
?>

	<div id="wrap_fm"><!-- [ Header ]-->
		<div class="header_fm">
			<div class="logo_fm"><?php _e( 'ForeverWood Theme' , 'foreverwood' ); ?></div>
		</div>

		<!-- [ Top Menu ]-->
		<div class="top_menu_fm">
			<a target="_blank" class="doc_fm" href="<?php echo esc_url($foreverwood_manualurl); ?>"><?php _e( 'Documentation' , 'foreverwood' ); ?></a><a target="_blank" class="support_fm" href="http://www.tomastoman.cz/support"><?php _e( 'Support' , 'foreverwood' ); ?></a><a target="_blank" class="premium_fm" href="http://www.tomastoman.cz/downloads/foreverwood/"><?php _e( 'Get Premium Version' , 'foreverwood' ); ?></a>
		</div>

	<?php 
	foreach ($foreverwood_about as $value) {
	switch ( $value['type'] ) {
	case "open":
	?> 
	<?php break; case "title": ?> 

	<!-- [ Body ]-->
	<div id="wrap_body_fm">
	<div class="tabscontainer">

	<?php break; case "close": ?> 

</div></div>
	
	<?php break; case "heading":?>
	<h1><?php echo $value['name']; ?></h1>
	
	<?php break; case "subheader":?>
	<div class="name_fm"><?php echo $value['name']; ?></div>
	
  <?php break; case "infotext":?>
	<div class="infotext"><?php echo $value['name']; ?></div>
	
	<?php break; case "paragraph":?>
	<div class="desc_fm"><small><?php echo $value['name']; ?></small></div>
  	
	<?php break; case "tabs-open":?>	
	<div class="tabs">
	
	<?php break; case "tabs-close":?>	
	</div>	
	
	<?php break; case "tab":?>	
	<div class="tab<?php echo $value['class']; ?>" id="<?php echo $value['id']; ?>">
	<div class="link"><?php echo $value['name']; ?></div>
	<div class="arrow"></div>
	</div>
 	
 	<?php break; case "container-open":?>	
	<div class="curvedContainer">
 	
 	<?php break; case "container-close":?>	
	</div>	
 	
	<?php break; case "tabcontent-open":?>	
	<div class="tabcontent" id="<?php echo $value['name']; ?>" style="display:<?php echo $value['display']; ?>" >
	
	<?php break; case "tabcontent-close":?>	
	</div>
	 	
<?php break;
}
}
?>

<?php
}
add_action('admin_menu', 'foreverwood_add_admin'); ?>