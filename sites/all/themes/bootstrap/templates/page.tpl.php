<div class="ccontain">
<header id="navbar" role="banner" class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?> <span><?php print $site_slogan; ?></span></a>
        </h1>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse pull-right">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<?php if (!empty($page['highlighted'])): ?>
<div class="feature hero-unit">
  <header role="banner" id="page-header" class="container">
    <?php print render($page['header']); ?>
	  <div class="row">

	        <section class="highlighted span12">
	        	<?php print render($page['highlighted']); ?>
	        </section>
	  </div>
	</header> <!-- /#header -->
</div>
<?php endif; ?>

  <div class="main-container container">
    <div class="row">
    
     <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>
    
    <section class="span8 offset2">  
      
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>      
            <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php print render($page['content']); ?>   
      
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  <footer class="footer container">
  	<section class="fluid-row">
  		<?php print render($page['footer_top']); ?>
  		<?php print render($page['footer_second']); ?>
  	</section>
  	
  	<section class="fluid-row">
  		<?php print render($page['footer_third']); ?>
  	</section>

	<section class="row copyright">
	  	<p class="span8 alpha">&copy;<?php print date("Y")?> rachelbrandon.com - All Rights Reserved. Site Designed and Developed by <a href="http://brandonhundt.com">Brandon Hundt</a>. <br />If you have any suggestions to make this a better blog please <a href="/contact">contact us</a>.</p>
	    <p class="span4 omega pull-right"><a class="pull-right" href="/rss/articles" title="Subscribe via RSS"><i class="icon-rss"></i> Subscribe via RSS</a></p>
  </section>  

  </footer>
</div>
</div>
