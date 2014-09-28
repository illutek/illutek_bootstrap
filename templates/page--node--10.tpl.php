    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php print $front_page; ?>">illutek</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li></li>
            
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->
      

  <div id="content_wrapper">
      <div id="content_wrap" class="container">
          <div class="col-xs-12 col-sm-12">
            <div class="row">
            <?php print render($title_prefix); ?>                
                <?php if ($title): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>                
                <?php print render($title_suffix); ?>                
                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>                
                <?php print render($page['help']); ?>                
                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                <div class="weergave">
                    <div class="gallerij_weergave"><div class="text_weergave">Gallerij weergave</div>
                    <a href="#" class="list">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/grid_view.png">
                    </a>
                    </div>
                    <div class=""><div class="text_weergave">Lijst weergave</div>
                    <a href="#" class="table">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/table_view.png">
                    </a>
                    </div>
                </div><!-- end weergave -->
                <?php print render($page['content']); ?>
            </div><!--/row-->
          </div><!--/span-->
      </div><!--/.container-->
  </div>

     <div id="aboutus_wrapper">
        <div id="links" class="container">
          <h2>Meer van ons</h2>
          <div class=" col-sm-6 col-lg-6">
                <div class="block_links">
                  <a href="http://winkel.illutek.be/" target="_blank">
                    <img src="<?php print base_path() . path_to_theme(); ?>/images/hardware.png" alt="illutek hardware">
                  </a>
                  <h3>Hardware</h3>
                  <p>Dit is vooral opgezet om een beter zicht te krijgen van het oude of ook soms nieuwe materiaal dat we beide in voorraad hebben.<br>We proberen het op deze manier te redden van het containerpark.</p>
                </div>
              </div><!--/span-->
              <div class=" col-sm-6 col-lg-6">
                <div class="">
                  <a href="http://www.facebook.com/illutek" target="_blank">
                    <img src="<?php print base_path() . path_to_theme(); ?>/images/facebook.png" alt="illutek facebook">
                  </a>
                  <h3>Facebook</h3>
                  <p>Alles wat we zo ontdekken op het web in verband met nieuws over IT en webdesign.</p>
                </div>
              </div><!--/span-->
        </div>
      </div>

      <div id="community_wrapper">
        <div id="community" class="container">
          <div class="col-sm-12 col-lg-12">
            <a href="https://www.drupal.org/getting-involved"  target="_blank">
              <img src="<?php print base_path() . path_to_theme(); ?>/images/drupal.png" alt="drupal.org"></a>
            <h2>Developed everywhere for people anywhere</h2>
            <p>Drupal is gratis, open source software, die door meer dan een miljoen gebruikers in 230 landen wordt gebruikt.</p><p>De Drupal community is in constante groei. Word er lid van.</p>
          </div>
        </div>
      </div>

      <footer >
        <div id="inner_footer" class="container">
          <p>&copy; Company 2014 | <a href="#">cookies</a></p>
        </div>
      </footer>

  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/offcanvas.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.smooth-scroll.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.backstretch.js"></script>

    <script>$(".bcg_header").backstretch("images/header_image2.jpg");</script>    