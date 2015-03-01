<?php

class ImagePriceCalcAdmin {

//Admin Panel Functions

	public function __construct() {
	
		add_action('init', array($this, 'image_admin_panel'));
		//add_action( 'admin_init', array($this,'admin_panel_meta' ));
		add_filter( 'manage_edit-image_price_calc_columns', array( $this, 'admin_table_columns' ) );
		add_action('manage_image_price_calc_posts_custom_column', array( $this, 'admin_table_columns_data'), 10, 2 );
		add_action('edit_form_after_title', array($this,'default_form_content'));
		add_filter('post_updated_messages', array($this,'admin_updated_messages' ));
		
	}

  function image_admin_panel() {
		register_post_type('image_price_calc', array(
				'labels' => array(
				'name' => 'Image Price Calculator Forms' ,
				'singular_name' =>  'Image Price Calculator Form',
				'add_new_item' => 'Add New Form' ,
				'edit_item' => 'Edit Form'
				),
				'public' => false,
				'rewrite' => false,
				'has_archive' => true,
				'menu_position' => 100,
				'menu_icon' => 'dashicons-media-text',
				'show_ui' => true
			)
		);
	}
	
	function admin_table_columns($columns) {
		$columns['shortcode'] = 'Shortcode';
		$columns['email'] = 'Email';
		
		return $columns;
	}
	
	function admin_table_columns_data($column,$post_id) {
	
		switch($column){
			case 'shortcode':			
			if($post_id)			
			echo "[spc-form id=" . $post_id . "]";
			break;		
			
			case 'email':			
			$savedemail='No e-mail specified';
			echo $savedemail;
			break;		

			default:
			echo $column . $post_id;			
		}
	}
	
	
	//Displays default form content if post is empty
	
	function default_form_content() {
		global $post;
		if ($post->post_type == 'image_price_calc'  && $post->post_content == '') {
			
			$sampformcontent='
			<h4> Select Master </h4>
			<select id="selmaster">
			<option value="0" id="selnone"> Choose Option Type  </option> 
			<option value="10" id="Basic"> Basic Type </option>
			<option value="20" id="Advance"> Advanced Type </option>
			</select> 
      </br>
      </br>
      <h4> Select Extra1 </h4>
			<select id="selextra1">
			<option value="0" id="selnone2"> Choose Option Type  </option> 
			<option value="10" id="nameImagextra1kind1"> Option Extra1 Kind1 </option>
			<option value="20" id="nameImagextra1kind2"> Option Extra1 Kind2 </option>
			</select> 
      </br>
      </br>
      <h4> Select Extra2 </h4>
			<select id="selextra2">
			<option value="0" id="selnone3"> Choose Option Type  </option> 
			<option value="10" id="nameImagextra2kind1"> Option Extra2 Kind1 </option>
			<option value="20" id="nameImagextra2kind2"> Option Extra2 Kind2 </option>
			</select> 
			
			<br />			
            <br />
			
			<h4> Sample Checkbox Settings </h4>
             
			<input type="checkbox" value="10" id="nameImageCbox"> Sample Checkbox 
								
			<br />
		    <br />
			
			<h4> Sample Radio Settings </h4>
			<input type="radio" name="css" value="0" id="noneradio"> None <br />
			<input type="radio" name="css" value="5" id="nameImageRadio1"> Radio Setting1   <br />
			<input type="radio" name="css" value="7" id="nameImageRadio2"> Radio Setting2  <br />
			<button id="btnCarro" type="button" name="testPhp">Añadir a carrro</button>
			
             <br />';
			
			$post->post_content = $sampformcontent;		
		}
    
	}		

	function admin_updated_messages( $messages ) {
		$messages['image_price_calc'] = array(
			1  => sprintf(__( 'Form updated. <a href="%s">View Shortcode</a>' ), esc_url(admin_url('edit.php?post_type=image_price_calc') ) ) ,
			6  => sprintf(__( 'Form published. <a href="%s">View Shortcode</a>' ), esc_url(admin_url('edit.php?post_type=image_price_calc') ) ),
			7  => __ ('Form saved.' ),
			10  => __ ('Form draft updated.' )
		);
		return $messages;
	}
	
}	

$imagepricecalcadmin= new ImagePriceCalcAdmin();