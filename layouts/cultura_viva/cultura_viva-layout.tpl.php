<div<?php print $attributes; ?>>
  <header class="l-cv-header" role="banner">
    <div class="l-cv-branding" role="logo-marca">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo" role="logo-sitio"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <h1 class="site-name" role="marca">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($page['branding']); ?>
    </div>
  </header> 
 <div class="l-cv-main">
 <div class="l-cv-principal" role="principal">
      <?php print render($page['principal']); ?>
  </div>  
  <div class="l-cv-slider" role="slider">
     <?php print render($page['slider']); ?>
  </div>
 <div class="l-cv-region--destacado" role="destacado">
      <?php print render($page['highlighted']); ?></div>
  <div class="l-cv-region--breadcrumb" role="breadcrumb">
      <?php print $breadcrumb; ?>  
  </div>
  <div class="l-cv-content" role="Contenido">        
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php print render($page['content']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print $feed_icons; ?>  
    </div>
  <?php print render($page['sidebar']); ?>
  </div>


  <footer class="l-cv-footer" role="Info Footer">
    <?php print render($page['footer']); ?>
  </footer>  

</div>
