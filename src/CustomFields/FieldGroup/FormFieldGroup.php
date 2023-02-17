<?php
namespace teststratis\plugins\formPlugin\CustomFields\FieldGroup;

use Geniem\ACF\Field\Text;
use Geniem\ACF\Field\Textarea;
use teststratis\WordPress\Type\FieldGroup;

class FormFieldGroup extends FieldGroup {
	public function __construct( $key = 'Form_field' ) {
		parent::__construct( __( 'Form_field'), $key );
	 	$title = new Text( __( 'title'), 'title', 'title' );
        $text  = new Textarea( __( 'Description'), 'Description', 'Description' );
        $this->add_fields( array($title,$text) );
	}
}
