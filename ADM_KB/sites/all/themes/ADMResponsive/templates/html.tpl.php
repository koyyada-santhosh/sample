<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
  <!--[if lt IE 8]>
    <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/general_foundicons_ie7.css";</style>
    <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/social_foundicons_ie7.css";</style>
<!--<![endif]-->

<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'business') . '/js/html5.js'; ?>"></script><![endif]-->

<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed|Maven+Pro|Raleway|Text+Me+One|Comfortaa|Audiowide|Asap' rel='stylesheet' type='text/css'>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
</body>
</html>