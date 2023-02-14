<?php

namespace teststratis\plugins\formPlugin\PostType;

/**
 * Class FormPostType
 *
 */
class FormPostType {
	/**
	 * @param $post_type
	 */
	protected function __construct( $post_type = 'formpost' ) {
		parent::__construct( $post_type );

		$this->set_labels(
			array(
				'post'                     => __( 'Pot 1'),
				'singular_post'            => __( 'City post' ),
				'edit_post'                => __( 'Edit post' ),
				'new_post'                 => __( 'New post' ),
				'view_post'                => __( 'View post' ),
				'view_post'               => __( 'View post' ),
				'search_post'             => __( 'Search post' ),
				'not_found'                => __( 'No post found.' ),
				'not_found_in_trash'       => __( 'No post found in Trash.' ),
				'parent_item_colon'        => __( 'Parent Post:' ),
				'all_post'                => __( 'All post' ),
				'archives'                 => __( 'Post Archives' ),
				'attributes'               => __( 'Post Attributes' ),
				'insert_into_post'         => __( 'Insert into post' ),
				'uploaded_to_this_post'    => __( 'Uploaded to this post' ),
				'filter_posts_list'        => __( 'Filter post' ),
				'posts_list_navigation'    => __( 'Post list navigation' ),
				'posts_list'               => __( 'Post list' ),
				'post_published'           => __( 'Post published.' ),
				'post_published_privately' => __( 'Post published privately.' ),
				'post_reverted_to_draft'   => __( 'Post reverted to draft.' ),
				'post_scheduled'           => __( 'Post scheduled.' ),
				'post_updated'             => __( 'Post updated.' ),
			)
			);
		FormFieldGroup::get_instance()->add_to_post_type( $this );
		$this->set_sort_by_title( true );

	}

}
