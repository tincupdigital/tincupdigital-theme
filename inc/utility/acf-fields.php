<?php
/**
 * ACF fields export file
 *
 * @package _s
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_56ad5a87a69bf',
  'title' => 'Contact Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56ad5c6f3af46',
      'label' => 'Contact Form',
      'name' => 'contact_form',
      'type' => 'post_object',
      'instructions' => 'Select a contact form to display on the page.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'wpcf7_contact_form',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'return_format' => 'object',
      'ui' => 1,
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
          'key' => '56a4588de32b9',
          'name' => 'hero_section',
          'label' => 'Hero Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_56a458b4d1456',
              'label' => 'Hero Image',
              'name' => 'hero_image',
              'type' => 'image',
              'instructions' => 'Upload the hero image.',
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
              'min_width' => 1600,
              'min_height' => 600,
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => 'jpg,jpeg,gif',
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
                  'key' => 'field_56a45ddf4da5c',
                  'label' => 'Button Text',
                  'name' => 'button_text',
                  'type' => 'text',
                  'instructions' => 'Enter text to display on the button.',
                  'required' => 0,
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
              'key' => 'field_56c75e67a0b40',
              'label' => 'CTA Items',
              'name' => 'cta_items',
              'type' => 'repeater',
              'instructions' => 'Add CTAs by clicking "Add CTA" below.',
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
              'button_label' => 'Add CTA',
              'sub_fields' => array (
                array (
                  'key' => 'field_56c75ec4a0b41',
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
                  'key' => 'field_56c75f0ba0b42',
                  'label' => 'CTA Text',
                  'name' => 'cta_text',
                  'type' => 'wysiwyg',
                  'instructions' => 'Enter the text of the CTA.',
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
                  'key' => 'field_56c75f5ba0b43',
                  'label' => 'Button Text',
                  'name' => 'button_text',
                  'type' => 'text',
                  'instructions' => 'Enter text to display on the button.',
                  'required' => 0,
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
                  'key' => 'field_56c7645ba0b44',
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
  'key' => 'group_56ad558f43fa3',
  'title' => 'Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56ad573f8d827',
      'label' => 'Hide Title?',
      'name' => 'hide_title',
      'type' => 'true_false',
      'instructions' => 'Check to hide the page title.',
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
      array (
        'param' => 'page_template',
        'operator' => '!=',
        'value' => 'page-templates/services-page.php',
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
  'key' => 'group_56a9661ec81dc',
  'title' => 'Services Page Fields',
  'fields' => array (
    array (
      'key' => 'field_56c8dd3e7599f',
      'label' => 'Hero Image',
      'name' => 'hero_image',
      'type' => 'image',
      'instructions' => 'Upload the hero image.',
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
      'key' => 'field_56c8dd5e759a0',
      'label' => 'Hero Text',
      'name' => 'hero_text',
      'type' => 'wysiwyg',
      'instructions' => 'Enter some text to display above the image in the hero area.',
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

endif;