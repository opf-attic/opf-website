<?php
// $Id: template.php,v 1.15.2.1.2.23 2010/03/22 14:31:28 designerbrent Exp $

/**
 * Uncomment the following line during development to automatically
 * flush the theme cache when you load the page. That way it will
 * always look for new tpl files.
 */
drupal_flush_all_caches();

/**
 * Intercept page template variables
 *
 * @param $vars
 *   A sequential array of variables passed to the theme function.
 */
function opf_preprocess_page(&$vars) {
  // determine layout
  // 3 columns
  if ($vars['layout'] == 'both') {
    $vars['left_classes'] = 'col-left span-5 prepend-1';
    $vars['right_classes'] = 'col-right span-5 append-1 last';
    $vars['center_classes'] = 'col-center span-12';
    $vars['body_classes'] .= ' col-3';
  }
  // 2 columns
  else if ($vars['layout'] != 'none') {
    // left column & center
    if ($vars['layout'] == 'left') {
      $vars['left_classes'] = 'col-left span-6';
      $vars['center_classes'] = 'col-center span-18 last';
    }
    // right column & center
    else if ($vars['layout'] == 'right') {
      $vars['right_classes'] = 'col-right span-6 last';
      $vars['center_classes'] = 'col-center span-18';
    }
    $vars['body_classes'] .= ' col-2 ';
  }
  // 1 column
  else {

    $vars['center_classes'] = 'col-center span-24';
    $vars['body_classes'] .= ' col-1 ';
  }

	$vars['header_classes'] .= ' prepend-top prepend-1 append-1';
}
