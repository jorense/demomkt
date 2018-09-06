<!doctype html>
<html class="no-js" lang="en">
<head>
<!-- Relative path support for semantic URL -->
<?php
  //$real_root_directory = '';
	if($real_root_directory != '') {
		echo '<base href="' . $real_root_directory . '" />';
	}
?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo $metaTitle; ?></title>
<meta name="description" content="<?php echo $metadescription; ?>">
<meta name="keywords" content="<?php echo $metakeyWords; ?>">
<meta property="og:title" content="<?php echo $metaTitle; ?>"/>
<meta property="og:site_name" content="<?php echo $metaSiteName; ?>"/>
<meta property="og:description" content="<?php echo $metadescription; ?>"/>
<meta property="og:type" content="<?php echo $metaType; ?>"/>
<meta property="og:url" content="<?php echo $metaUrl; ?>"/>
<meta property="og:image" content="<?php echo $metaImage; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="canonical" href="<?php echo $canonicalUrl; ?>">
<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="dist/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="dist/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="dist/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="dist/images/favicon/manifest.json">
<link rel="mask-icon" href="dist/images/favicon/safari-pinned-tab.svg" color="#d22d37">
<meta name="theme-color" content="#ffffff">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Font Awesome -->
<!-- <script src="https://use.fontawesome.com/82d3d898fc.js"></script> -->

<!-- css by Joseph for Phase 1 -->
<link rel="stylesheet" href="phase1/include/p1_style.css" media="all"/>

<link rel="stylesheet" href="dist/css/style.min.css" media="all"/>

<!-- Search URL -->
<script type="text/javascript">
	var baseUrl = '<?php echo $real_root_directory ?>';
</script>

<!--[if IE]>
<style media="screen">
  #main-container { border: 1px solid red; }
</style>
<![endif]-->

<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
<script src="dist/js/html5.js"></script>
<script src="dist/js/lib/modernizr-2.8.3.min.js"></script>
<script>window.paceOptions = {restartOnPushState: false};</script>
<script src="dist/js/pace.min.js"></script>
</head>
<body>

<!-- Mobile Navigation -->
<?php include_once ('include/nav-mobile-en.php'); ?>

<!-- Desktop Navigation -->
<?php include_once ('include/nav-desktop-en.php'); ?>
