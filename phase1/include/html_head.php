<!-- No follow -->
<?php echo $nofollow; ?>

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:700,600,400,300' rel='stylesheet' type='text/css'>

<!-- No zoom -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<!-- Open Graph -->
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo $site_name; ?>"/>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="img_asset/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img_asset/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img_asset/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img_asset/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img_asset/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img_asset/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img_asset/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img_asset/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img_asset/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="img_asset/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img_asset/favicon/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="img_asset/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="img_asset/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="img_asset/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img_asset/favicon/manifest.json">
<link rel="mask-icon" href="img_asset/favicon/safari-pinned-tab.svg" color="#004098">
<meta name="msapplication-TileColor" content="#004098">
<meta name="msapplication-TileImage" content="img_asset/favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Parsley -->
<script src="include/parsley.min.js"></script>
<link href="include/parsley.css" rel="stylesheet" type="text/css">

<!-- Font Awesome --->
<link rel="stylesheet" href="include/font_awesome/css/font-awesome.min.css">

<!-- Responsive Slides -->
<script src="include/responsiveslides.min.js"></script>

<!-- Google Analytics -->
<?php echo $google_analytics; ?>

<!-- Facebook JS SDK -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $fbapp_id; ?>',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Date time picker -->
<link rel="stylesheet" type="text/css" href="include/datetimepicker/jquery.datetimepicker.css"/ >
<script src="include/datetimepicker/jquery.datetimepicker.full.min.js"></script>

<!-- Prefix Free -->
<script src="include/prefixfree.min.js"></script>

<!-- Respond.js (enables css media queries in older browsers) -->
<script src="include/respond.js"></script>