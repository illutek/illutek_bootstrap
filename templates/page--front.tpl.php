    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">illutek</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php print $front_page; ?>">Home</a></li>
            <li><a href="#links_wrapper">Links</a></li>
            <li><a href="#why_wrapper">Why Drupal</a></li>
            <li><a href="#newsdrupal_wrapper">Drupal news</a></li>
            <li><a href="#drupalsite_wrapper">Drupal sites</a></li>
            <li><a href="#aboutus_wrapper">About us</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

   
      <header>
        <div class="bcg_header">
            <div class="container">
              <div class="content_header col-lg-3">
                <section>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                </section>
              </div><!-- end content_header -->
            </div>
        </div><!-- end bcg_header -->
      </header>


  <div id="links_wrapper">
      <div id="links_wrap" class="container">
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
                <?php print render($page['content']); ?>
             <p><a class="btn btn-default" href="#" role="button">Meer &raquo;</a></p>
            </div><!--/row-->
          </div><!--/span-->
      </div><!--/.container-->

      <div id="why_wrapper">
        <div id="why_content" class="container">
          <div class="col-xs-12 col-sm-12">
            <div class="row">
              <h2>Waarom Drupal</h2>
              <div class="col-6 col-sm-4 col-lg-4">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/innovation.jpg">
                <h3>Innovation</h3>
                <p>Een platform voor digitale innovatie en ideeën</p>
                <p>Drupal maakt continue digitale innovatie bij toonaangevende organisaties zoals Weather.com en NBCUniversal. Met Drupal kunnen marketeers en web-ontwikkelaars grote web-, mobiele en sociale ervaringen maken en beheren. En ze kunnen deze verbeteren en snel aanpassen dankzij voortdurende innovatie en ideeën van de Drupal community.</p>
              </div><!--/span-->
              <div class="col-6 col-sm-4 col-lg-4">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/speed.jpg">
                <h3>Speed</h3>
                <p>Bouw nieuwe sites en ervaringen sneller </p>
                <p>Speed is belangrijk in digitale marketing. Digitale-eerste organisatie hebben behoefte aan een platform dat hen helpt zich snel aan te passen en te profiteren van zakelijke kansen. Flexibel platform Drupal laat marketeers en ontwikkelaars knelpunten en vertragingen te overwinnen, zodat ze een snel en wendbaar team kunnen uitbouwen dat verbazingwekkende web-ervaringen kan creëren.</p>
              </div><!--/span-->
              <div class="col-6 col-sm-4 col-lg-4">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/Scalability.jpg">
                <h3>Scalability</h3>
                <p>Drukste websites van de wereld draaien op Drupal </p>
                <p>Drupal is enterprise-ready voor 's werelds drukste websites als GRAMMY.com en de Olympische Spelen, waar falen geen optie is. En, meer dan alleen de ondersteuning van high traffic sites, zal Drupal met uw bedrijf mee groeien om zo klaar te zijn voor de volgende digitale generatie.</p>
              </div><!--/span-->

            </div>
          </div>
        </div>
      </div>

      <div id="newsdrupal_wrapper">
        <div id="newsdrupal_wrap" class="container">
          <div class="col-xs-12 col-sm-12">
            <div class="row">
              <?php print render($page['newsdrupal']); ?>
            </div><!-- row -->
          </div>
        </div><!-- end newsdrupal_content -->
      </div><!-- end newsdrupal_wrapper -->

      <div id="drupalsite_wrapper">
        <div id="drupalsite_wrap" class="container">
          <div class="col-xs-12 col-sm-12">
            <div class="row">
               <?php print render($page['drupalsite']); ?>
            </div><!-- row -->
          </div>
          <div class="btn_wrap">
            <a class="btn btn-default" href="node/10" role="button">Meer Drupal sites</a>
          </div><!-- end .btn_wrap -->
        </div><!-- end drupalsite_content -->

      </div><!-- end drupalsite_wrapper -->
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

  </div><!-- end content_wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/offcanvas.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.smooth-scroll.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.backstretch.js"></script>

    <script>
      (function($){
        $(document).ready(function(){
          var base = window.Drupal.settings.basePath + 'sites/all/themes/themeDrupalCom/images/';
          $(".bcg_header").backstretch([
            base + 'header_image2.jpg',
            base + 'header_image1.jpg',
            base + 'header_image3.jpg',
            base + 'header_image.jpg'], 
            {fade: 750, duration: 4000});
        });
      }(jQuery))

    </script>