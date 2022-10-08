<?php // este footer es mas bien un include. no usar html tags que no cierren en este lugar ?>

<!-- start wp footer js -->
<?php wp_footer(); ?>
<!-- end wp footer js -->

<!-- start footer-main js -->

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3063423-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3063423-8');
</script>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/templates-assets/dist/lib-bundle.min.js<?php echo $NOCACHE_VERSION_STRING; ?>'></script>
<!-- end footer-main js -->


