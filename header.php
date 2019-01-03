<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3RXKZN');</script>
<!-- End Google Tag Manager -->


    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"
    />
    <link rel="stylesheet" href="https://use.typekit.net/tgg0hmb.css">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"
    />

    <title>
        <?php wp_title(''); ?>
    </title>

    <?php wp_head();
    ?>


  <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/CMN_300x250_1', [300, 250], 'div-gpt-ad-1542410105602-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/CMN_300x250_2', [300, 250], 'div-gpt-ad-1542410269065-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/CMN_728X90_2', [728, 90], 'div-gpt-ad-1542766506042-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/CMN_728x90_1', [728, 90], 'div-gpt-ad-1542766380946-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3RXKZN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <header>
<div>
    <!-- <?php do_action('head_ads') ?> -->
    <nav class="nav-extended theme container bg not-movile-container">
    <div class="nav-wrapper">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo"><img style="padding:10px" src="<?php echo get_template_directory_uri(); ?>/media/logo-trends.png"></a>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
        <li><a href="https://www.instagram.com/_trendnews/"><i class="material-icons s instagram"></i></a></li>
        <li><a href="https://twitter.com/trendnews"><i class="material-icons s twitter"></i></a></li>
        <li><a href="https://www.facebook.com/trendnewss/"><i class="material-icons s facebook"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCaTWaQxWEyBIpeA4cKgDSSA"><i class="material-icons s youtube"></i></a></li>
      </ul>
      
    </div>

    <div class="nav-content hide-on-med-and-down">
      <ul class="tabs tabs-transparent">

<?php wp_list_categories(
  array(
    'title_li' => '',
    'exclude'             => '1,3,4314'
  )
);
?>


</ul>

    </div>
  </nav>

  <ul id="nav-mobile" class="sidenav">
<?php wp_list_categories(
  array(
    'title_li' => '',
    'exclude'             => '1',
  )
);
?>



        

    </header>

    <main class="container bg not-movile-container">