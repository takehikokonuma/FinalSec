<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Word</strong>crews</a></h1>
          <p><a class="site-footer__link" href="#">住所：No.401 Tower-C, Pearl Condo, the corner of Kabar Aye Pagoda and Sayar San roads, Bahan township, Yangon, Myanmar</a></p>
        </div>


        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">企業情報</h3>
            <nav>
              <!-- <?php
              wp_nav_menu(array(
                'theme_location' => 'footerLocationOne'
              ))
              ?>
            -->
                  <ul class="nav-list min-list">
                    <li><a href="<?php echo site_url('/about-us') ?>">会社概要</a></li>
                    <li><a href="<?php echo site_url('/burmese-lessons'); ?>">サービス</a></li>
                    <li><a href="<?php echo site_url('/contact'); ?>">問い合わせ先</a></li>

                  </ul>
            </nav>
          </div>



          <div class="site-footer__col-three">
            <h3 class="headline headline--small">参考情報</h3>

                <!-- WPでいじるメニュ
                 <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footerLocationTwo'
                  ))
                  ?>
                -->
          <nav>
                <ul class="nav-list min-list">
                  <li><a href="#">hogehoge</a></li>
                  <li><a href="<?php echo site_url('/contact') ?>">hogehoge</a></li>
                  <li><a href="#">hogehoge</a></li>
                </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">SNSでチェックする</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
