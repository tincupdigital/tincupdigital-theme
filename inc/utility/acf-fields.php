<?php
/**
 * ACF fields export file
 *
 * @package _s
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_57005fb08d231',
  'title' => 'About Page Fields',
  'fields' => array (
    array (
      'key' => 'field_57006152fe829',
      'label' => 'Page Title',
      'name' => 'page_title',
      'type' => 'text',
      'instructions' => 'Enter a title to display as the page\'s <em>h1</em> tag.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_57005fb697c8d',
      'label' => 'Page Intro',
      'name' => 'page_intro',
      'type' => 'wysiwyg',
      'instructions' => 'Add some intro copy. It will appear above the main content area, but below the featured image (if it exists).',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'basic',
      'media_upload' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/about-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_56ad5a87a69bf',
  'title' => 'Contact Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56d0d8e72d23e',
      'label' => 'Page Footer',
      'name' => 'page_footer',
      'type' => 'textarea',
      'instructions' => 'Enter footer text which will display above the phone number and email address.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_56d1d85233135',
      'label' => 'Phone & Email',
      'name' => '',
      'type' => 'message',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'Please note, the phone number and email address are global fields (so they can appear in the footer without having to add them in two places). They can be found at: <em>Appearance > Customize > Site Setup > Contact Info</em>.',
      'new_lines' => 'wpautop',
      'esc_html' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/contact-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_570018af95f95',
  'title' => 'CTA Fields',
  'fields' => array (
    array (
      'key' => 'field_57017fc8d0734',
      'label' => 'CTA Headline',
      'name' => 'cta_headline',
      'type' => 'text',
      'instructions' => 'Enter a headline for the CTA.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_570018b36f7a3',
      'label' => 'CTA Text',
      'name' => 'cta_text',
      'type' => 'wysiwyg',
      'instructions' => 'Enter some text for the CTA.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'basic',
      'media_upload' => 0,
    ),
    array (
      'key' => 'field_570032535556b',
      'label' => 'CTA Button Link',
      'name' => 'cta_button_link',
      'type' => 'post_object',
      'instructions' => 'Select a page or post for the CTA to link to.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'page',
        1 => 'post',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => 'field_5700196382857',
      'label' => 'CTA Button Text',
      'name' => 'cta_button_text',
      'type' => 'text',
      'instructions' => 'Enter some text to display on the CTA button.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'cta',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_56a41987ac5db',
  'title' => 'Home Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56a45871d1454',
      'label' => 'Home Sections',
      'name' => 'home_sections',
      'type' => 'flexible_content',
      'instructions' => 'Add home sections by clicking "Add Section" below.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Section',
      'min' => 1,
      'max' => '',
      'layouts' => array (
        array (
          'key' => '5702ff9982172',
          'name' => 'hero_section',
          'label' => 'Hero Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5702ffa882173',
              'label' => 'Hero Setup',
              'name' => 'hero_setup',
              'type' => 'radio',
              'instructions' => 'Select the setup of the hero area. This can be a single image or multiple images that fade between each other.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => array (
                'single' => 'Single Image',
                'multiple' => 'Multiple Images',
              ),
              'other_choice' => 0,
              'save_other_choice' => 0,
              'default_value' => '',
              'layout' => 'vertical',
            ),
            array (
              'key' => 'field_570300a982175',
              'label' => 'Hero Image',
              'name' => 'hero_image',
              'type' => 'image',
              'instructions' => 'Upload the image you want to display behind the logo in the hero area.',
              'required' => 1,
              'conditional_logic' => array (
                array (
                  array (
                    'field' => 'field_5702ffa882173',
                    'operator' => '==',
                    'value' => 'single',
                  ),
                ),
              ),
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
            array (
              'key' => 'field_5703002082174',
              'label' => 'Hero Gallery',
              'name' => 'hero_gallery',
              'type' => 'gallery',
              'instructions' => 'Upload the images you want to display in a slider behind the logo in the hero area.',
              'required' => 1,
              'conditional_logic' => array (
                array (
                  array (
                    'field' => 'field_5702ffa882173',
                    'operator' => '==',
                    'value' => 'multiple',
                  ),
                ),
              ),
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'min' => '',
              'max' => '',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '56a458f5d1457',
          'name' => 'about_section',
          'label' => 'About Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_56a4597ad1458',
              'label' => 'About Headline',
              'name' => 'about_headline',
              'type' => 'text',
              'instructions' => 'Enter a headline for the about section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_56a459a1d1459',
              'label' => 'About Text',
              'name' => 'about_text',
              'type' => 'wysiwyg',
              'instructions' => 'Enter some text to display below the "About" headline.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '56a459fa4da56',
          'name' => 'services_section',
          'label' => 'Services Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_56a45a0b4da57',
              'label' => 'Services',
              'name' => 'services',
              'type' => 'repeater',
              'instructions' => 'Add services by clicking "Add Service" below.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 3,
              'max' => 3,
              'layout' => 'row',
              'button_label' => 'Add Service',
              'sub_fields' => array (
                array (
                  'key' => 'field_56a45a434da58',
                  'label' => 'Service Image',
                  'name' => 'service_image',
                  'type' => 'image',
                  'instructions' => 'Upload a service image.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                  'preview_size' => 'thumbnail',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
                array (
                  'key' => 'field_56a45d524da59',
                  'label' => 'Service Headline',
                  'name' => 'service_headline',
                  'type' => 'text',
                  'instructions' => 'Enter a headline for the service.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                  'readonly' => 0,
                  'disabled' => 0,
                ),
                array (
                  'key' => 'field_56a45d684da5a',
                  'label' => 'Service Text',
                  'name' => 'service_text',
                  'type' => 'wysiwyg',
                  'instructions' => 'Enter some text describing the service.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'basic',
                  'media_upload' => 0,
                ),
                array (
                  'key' => 'field_56a45d8c4da5b',
                  'label' => 'Button Link',
                  'name' => 'button_link',
                  'type' => 'post_object',
                  'instructions' => 'Select a page or post for the button to link to.',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'post_type' => array (
                    0 => 'page',
                    1 => 'post',
                  ),
                  'taxonomy' => array (
                  ),
                  'allow_null' => 0,
                  'multiple' => 0,
                  'return_format' => 'id',
                  'ui' => 1,
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '56a45e5a42fbf',
          'name' => 'testimonial_section',
          'label' => 'Testimonial Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_56a45e6242fc0',
              'label' => 'Testimonials',
              'name' => 'testimonials',
              'type' => 'repeater',
              'instructions' => 'Add testimonials by clicking "Add Testimonial" below.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 1,
              'max' => '',
              'layout' => 'row',
              'button_label' => 'Add Testimonial',
              'sub_fields' => array (
                array (
                  'key' => 'field_56a45ece42fc1',
                  'label' => 'Testimonial Text',
                  'name' => 'testimonial_text',
                  'type' => 'wysiwyg',
                  'instructions' => 'Add the testimonial text here.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'basic',
                  'media_upload' => 0,
                ),
                array (
                  'key' => 'field_56a45ef642fc2',
                  'label' => 'Testimonial Author',
                  'name' => 'testimonial_author',
                  'type' => 'text',
                  'instructions' => 'Enter the name of the testimonial author.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                  'readonly' => 0,
                  'disabled' => 0,
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '56a462d419e38',
          'name' => 'case_study_section',
          'label' => 'Case Study Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_56a462de19e39',
              'label' => 'Case Studies',
              'name' => 'case_studies',
              'type' => 'relationship',
              'instructions' => 'Select case studies to display in this section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'post_type' => array (
                0 => 'case_study',
              ),
              'taxonomy' => array (
              ),
              'filters' => array (
                0 => 'search',
              ),
              'elements' => array (
                0 => 'featured_image',
              ),
              'min' => 3,
              'max' => 6,
              'return_format' => 'object',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '56a4631c19e3a',
          'name' => 'cta_section',
          'label' => 'CTA Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_57001ce4f2578',
              'label' => 'CTA Items',
              'name' => 'cta_items',
              'type' => 'relationship',
              'instructions' => 'Select the CTA items you\'d like to display. If more than one CTA item is selected, they\'ll be displayed as a slider.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'post_type' => array (
                0 => 'cta',
              ),
              'taxonomy' => array (
              ),
              'filters' => array (
                0 => 'search',
              ),
              'elements' => '',
              'min' => 1,
              'max' => '',
              'return_format' => 'object',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_57016ab74a6a3',
  'title' => 'Image Fields',
  'fields' => array (
    array (
      'key' => 'field_57016acecb482',
      'label' => 'Custom Thumbnail',
      'name' => 'custom_thumbnail',
      'type' => 'image',
      'instructions' => 'Upload an image to use as a thumbnail for the post. This can be used where the post\'s featured image doesn\'t work very well as an thumbnail.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'side',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_57001e010a2c4',
  'title' => 'Post Fields',
  'fields' => array (
    array (
      'key' => 'field_570053ad15694',
      'label' => 'Add CTA?',
      'name' => 'add_cta_item',
      'type' => 'true_false',
      'instructions' => 'Check this box if you\'d like to add a CTA item.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_57001e0cd14dc',
      'label' => 'CTA Item',
      'name' => 'cta_item',
      'type' => 'post_object',
      'instructions' => 'Select a CTA item to display at the bottom of the post.',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_570053ad15694',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'cta',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => 'field_570052c8bba7b',
      'label' => 'CTA Item Background',
      'name' => 'cta_item_background',
      'type' => 'image',
      'instructions' => 'Upload or select an image to use as a background for the CTA.',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_570053ad15694',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_56a9661ec81dc',
  'title' => 'Services Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56c8dd5e759a0',
      'label' => 'Hero Text',
      'name' => 'hero_text',
      'type' => 'textarea',
      'instructions' => 'Enter some text to display above the image in the hero area.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => 3,
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_56a96729181f6',
      'label' => 'Services',
      'name' => 'services',
      'type' => 'repeater',
      'instructions' => 'Add a service by clicking "Add Service" below.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 1,
      'max' => '',
      'layout' => 'row',
      'button_label' => 'Add Service',
      'sub_fields' => array (
        array (
          'key' => 'field_56c8d21ff2143',
          'label' => 'Service Image',
          'name' => 'service_image',
          'type' => 'image',
          'instructions' => 'Upload an image to represent the service.',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array (
          'key' => 'field_56c8d23df2144',
          'label' => 'Service Headline',
          'name' => 'service_headline',
          'type' => 'text',
          'instructions' => 'Enter a headline for the service.',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_56c8d259f2145',
          'label' => 'Service Text',
          'name' => 'service_text',
          'type' => 'wysiwyg',
          'instructions' => 'Add some text describing the service.',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'basic',
          'media_upload' => 0,
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/services-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_56ca74d3e4a3f',
  'title' => 'Services Parent Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56ca751f4f84c',
      'label' => 'Hero Text',
      'name' => 'hero_text',
      'type' => 'textarea',
      'instructions' => 'Enter some text to display above the image in the hero area.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => 3,
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/services-parent-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_57001d71dece2',
  'title' => 'Page Fields',
  'fields' => array (
    array (
      'key' => 'field_57001d857b38e',
      'label' => 'CTA Items',
      'name' => 'cta_items',
      'type' => 'relationship',
      'instructions' => 'Select the CTA items you\'d like to display. If more than one CTA item is selected, they\'ll be displayed as a slider.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'cta',
      ),
      'taxonomy' => array (
      ),
      'filters' => array (
        0 => 'search',
      ),
      'elements' => '',
      'min' => '',
      'max' => '',
      'return_format' => 'object',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
      array (
        'param' => 'page_template',
        'operator' => '!=',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 1,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;