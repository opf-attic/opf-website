<?php // $Id: page.tpl.php,v 1.15.4.7 2008/12/23 03:40:02 designerbrent Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="content-language" content="<?php print $language->language ?>" />
	<?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="<?php print $path; ?>../blueprint/css/ie.css" type="text/css" media="screen, projection">
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $path; ?>../blueprint/css/ie.css" type="text/css" media="screen, projection">
  	<link href="<?php print $path; ?>../blueprint/css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
  <!--[if lte IE 6]>
  	<link href="<?php print $path; ?>../blueprint/css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19484201-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="<?php print $body_classes; ?>">

<div id="page-container" class="container">
  <div id="header" class="<?php print $header_classes; ?>">
	<div class="span-6">
     <h1 id="logo">
      <a title="<?php print $site_name; ?><?php if ($site_slogan != '') print ' &ndash; '. $site_slogan; ?>" href="<?php print url(); ?>"><?php print $site_name; ?><?php if ($site_slogan != '') print ' &ndash; '. $site_slogan; ?></a>
     </h1>
    </div>
    <div class="span-17 last">
	  <?php if (isset($secondary_links)) : ?>
	    <?php print theme('links', $secondary_links, array('id' => 'subnav', 'class' => 'links')) ?>
	  <?php endif; ?>

    <?php if (isset($primary_links)) : ?>
      <?php print theme('links', $primary_links, array('id' => 'nav', 'class' => 'links')) ?>
    <?php endif; ?>
    </div>
    <div class="span-23">
      <?php if ($breadcrumb != '') : ?>
        <?php print $breadcrumb; ?>
      <?php endif; ?>
	<?php print $header; ?>
	</div>
  </div>

  <?php if ($left): ?>
    <div class="<?php print $left_classes; ?>"><?php print $left; ?></div>
  <?php endif ?>
  
  <div class="<?php print $center_classes; ?>">
    <?php
      if ($tabs != '') {
        print '<div class="tabs">'. $tabs .'</div>';
      }

      if ($messages != '') {
        print '<div id="messages">'. $messages .'</div>';
      }
      
      if ($title != '') {
        print '<h2>'. $title .'</h2>';
      }      

      print $help; // Drupal already wraps this one in a class      

      print $content;
      print $feed_icons;
    ?>

    <?php if ($footer_message | $footer): ?>
      <div id="footer" class="clear append-bottom">
        <?php if ($footer): ?>
          <?php print $footer; ?>
        <?php endif; ?>
        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($right): ?>
    <div class="<?php print $right_classes; ?>"><?php print $right; ?></div>
  <?php endif ?>
  

  <?php print $scripts ?>
  <?php print $closure; ?>

</div>

</body>
</html>
