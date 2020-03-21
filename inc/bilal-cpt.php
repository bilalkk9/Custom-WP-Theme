<?php
//Simplest Custom post type
function bilal_cpt() {
register_post_type( 'Persons',
	array(
		'labels'=>array(
			'name'=>__('Person','bilaltheme'),
			'singular_name'=>__('Person','bilaltheme')
		),
		'public'=>true,
		'has_archive'=>true
) );
	
}

//Custom Taxonomy
function skill_person_taxonomy(){
	register_taxonomy( 
		'skill_type',
		'Persons',
		array(
			'label'=>__('Skill Type','bilaltheme'),
			'rewrite'=>array('slug'=>'Skill'),
			'hierarchical'=>true
		)
	 );
}

//Custom Tags
function skill_person_tags(){
	register_taxonomy( 
		'skill_type',
		'Persons',
		array(
			'label'=>__('Skill Type','bilaltheme'),
			'rewrite'=>array('slug'=>'Skill'),
			'hierarchical'=>false
		)
	 );
}



?>