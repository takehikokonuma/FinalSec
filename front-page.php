<?php get_header(); ?>

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Bon Voyage!</h1>
      <h2 class="headline headline--medium">好きな時・好きな場所でミャンマー語学習！</h2>
      <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
      <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
  </div>

<!-- 特徴
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
      <div class="container clearfix">
        <h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
        <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
        <a href="#" class="button button-dark button-large button-rounded">Start Browsing</a>
      </div>
    </div>

    <div class="container clearfix">
      <div class="fancy-title title-border">
  <h3>Wordcrewsの特徴</h3>
      </div>

      <div class="col_one_fourth nobottommargin">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <a href="#"><i class="fa fa-wordpress"></i></a>


          </div>
          <h3><strong>1.家庭教師の厳選</strong><span class="subtitle">優秀でポテンシャルの高い家庭教師のみをデータベースに登録し、研修やワークショップで更なる講師のレベル図っております。</span></h3>
        </div>
      </div>

      <div class="col_one_fourth nobottommargin">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <a href="#"><i class="fa fa-thermometer-empty"></i></a>
          </div>
          <h3>2.柔軟なカリキュラム</h3><h3><span class="subtitle">独自の教科書を使用し、学習者それぞれに合ったカリキュラムの提案をしてるため、効率よく学習することを実現しています。</span></h3>
        </div>
      </div>

      <div class="col_one_fourth nobottommargin">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <a href="#"><i class="fa fa-pencil-square-o"></i></a>
          </div>
          <h3>3.ミャンマー人との交流<span class="subtitle">優秀で教養の高い家庭教師のみをご紹介しているため、ミャンマーの文化、価値観など様々な知見を共有できます。</span></h3>
        </div>
      </div>

      <div class="col_one_fourth nobottommargin col_last">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <a href="#"><i class="i-alt noborder icon-fire"></i></a>
          </div>
          <h3>4.ミャンマー人との交流<span class="subtitle">優秀で教養の高い家庭教師のみをご紹介しているため、ミャンマーの文化、価値観など様々な知見を共有できます。</span></h3>
        </div>
      </div>
    </div>
  </section>

          <div class="container">

                      <div class="fancy-title title-border">
                        <h3>Wordcrews 講師陣</h3>
                      </div>

                      <div class="row">

                        <div class="col-lg-3 col-md-6 bottommargin1">

                          <div class="team">
                            <div class="team-image">
                                <img src='wp-content/themes/FinalSec-master/images/tutorpic1.jpg' alt="takehiko">
                            </div>
                            <div class="team-desc">
                              <div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
                            </div>
                          </div>

                        </div>

                        <div class="col-lg-3 col-md-6 bottommargin">

                          <div class="team">
                            <div class="team-image">
                              <img src='wp-content/themes/FinalSec-master/images/3.jpg' alt="takehiko">
                            </div>
                            <div class="team-desc">
                              <div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
                            </div>
                          </div>

                        </div>

                        <div class="col-lg-3 col-md-6 bottommargin">

                          <div class="team">
                            <div class="team-image">
                                <img src='wp-content/themes/FinalSec-master/images/3.jpg' alt="takehiko">
                            </div>
                            <div class="team-desc">
                              <div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
                            </div>
                          </div>

                        </div>

                        <div class="col-lg-3 col-md-6 bottommargin">

                          <div class="team">
                            <div class="team-image">
                              <img src='wp-content/themes/FinalSec-master/images/3.jpg' alt="takehiko">
                            </div>
                            <div class="team-desc">
                              <div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
                            </div>
                          </div>

                        </div>

                      </div>
                  </div>




  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <?php
          $today = date('Ymd');
          $homepageEvents = new WP_Query(array(

            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));

          while ($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); ?>
            <div class="event-summary">
              <a class="event-summary__date t-center" href="#">
                <span class="event-summary__month"><?php
                $eventDate = new DateTime(get_field('event_date'));
                echo $eventDate->format('M') ?>
                </span>
                <span class="event-summary__day"><?php echo $eventDate->format('d')
                ?></span>
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny">
                  <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
              </div>
            </div>
          <?php }
          ?>

        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event') ?>" class="btn btn--blue">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

        <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 2
        ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
                    <div class="event-summary">
                      <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month"><?php the_time('M'); ?></span>
                        <span class="event-summary__day"><?php the_time('d'); ?></span>
                      </a>
                      <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php if (has_excerpt()) {
                          echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                      </div>
                    </div>
            <?php } wp_reset_postdata();
          ?>

        <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

 <br>

    <h2 class="uppercase center"><span>お客様</span> の声</h2>

  <div class="hero-slider">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
      <div class="hero-slider__interior container">
        <div class="testi-image">
          <a href="#">  <img src='wp-content/themes/FinalSec-master/images/tutorpic1.jpg' alt="takehiko"></a>
        </div>
        <div class="testi-content">
          <p>Myanwaveの家庭教師サービスを使い始めてから、もうすぐ1年が経過します。最初は慣れていないということもあり、色々と苦労した場面もありましたが、家庭教師と学習したことを日常生活で使うことよって、当初に比べて日常生活での会話がかなり楽になりました。今後も実践的なミャンマー語をさらに学習していこうと思います。</p>
          <div class="testi-meta">
            Y.K
            <span>フリーランス</span>
          </div>
        </div>
      </div>
    </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="testi-image">
        <a href="#">  <img src='wp-content/themes/FinalSec-master/images/tutorpic1.jpg' alt="takehiko"></a>
      </div>
      <div class="testi-content">
        <p>Myanwaveの家庭教師は非常に熱心でわかり易い授業をしてくれます。私の講師は、優しい方ですが、時には厳しく接してくれ、仕事で忙しい時でもモチベーションを常に高い状態で学習出来ています。講師との努力の甲斐があり、3ヶ月ほどで日常会話のベーシックを学習できました。現在は、会話の練習をしつつ、読み書きに挑戦しています。</p>
        <div class="testi-meta">
          T.K
          <span>Opengate Inc.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="testi-image">
        <a href="#">  <img src='wp-content/themes/FinalSec-master/images/tutorpic1.jpg' alt="takehiko"></a>
      </div>
      <div class="testi-content">
        <p>Myanwave家庭教師にはいつも良くしてもらっています。私の先生は、非常に優秀で教えるのが上手で、学習プロセスなど色々アドバイスをいただけます。CHARMYAの家庭教師を初めてから、ミャンマー語も徐々に上達し、何よりも自信がついため、どんどん日常会話を練習し、将来的には、ミャンマー語検定にも挑戦してみたいと思っています。</p>
        <div class="testi-meta">
          T.K
          <span>Opengate Inc.</span>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php get_footer();

?>
