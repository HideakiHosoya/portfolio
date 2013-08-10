<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="Portfolio" />
<?php include( TEMPLATEPATH . '/include/head.php' ); ?>
</head>
<body id="portfolio">
  <div class="g960 content" id="pagetop">
    <div class="row pdg-b-30">
      <header class="c12">
        <a class="open radius5 grad" href="#nav"><i class="icon-reorder"></i></a>
        <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="cf">
          <div id="nav" class="cf">
            <?php wp_nav_menu( array('menu' => 'global_nav', 'container' => '')); ?>
          </div>
        </nav>
      </header>
    </div>
    <div class="row pf_box">
      <div class="c5 first">
        <img src="<?php echo get_template_directory_uri(); ?>/images/greatuk_01.jpg" alt="マンチェスターの知られざる魅力" />
      </div>
      <div class="c7 last client_data">
        <h2>マンチェスターの知られざる魅力</h2>
        <p>クライアント：英国政府観光局</p>
        <p>担当した箇所：全ページのコーディング</p>
        <p class="url">URL：http://greatuk.jp/manchester/</p>
      </div>
    </div>
    <div class="row pf_box">
      <div class="c5 first gallery_big gallery01">
        <img src="<?php echo get_template_directory_uri(); ?>/images/aircanada_01.jpg" alt="エア・カナダ" />
      </div>
      <div class="c7 last client_data">
        <h2>エア・カナダクラブ</h2>
        <p>クライアント：エア・カナダ</p>
        <p>担当した箇所：Movable Typeを使ってのサイト構築、全ページコーディング</p>
        <p class="url">URL：http://www.aircanada.jp/</p>
        <ul class="click_img gallery_thumb cf">
          <li>
            <a class="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/aircanada_01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/aircanada_01.jpg" alt="エア・カナダ" /></a>
          </li>
          <li>
            <a class="gallery01" href="<?php echo get_template_directory_uri(); ?>/images/aircanada_02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/aircanada_02.jpg" alt="エア・カナダ" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row pf_box">
      <div class="c5 first gallery_big gallery02">
        <img src="<?php echo get_template_directory_uri(); ?>/images/quntas_01.jpg" alt="旅のスタイルガイド" />
      </div>
      <div class="c7 last client_data">
        <h2>旅のスタイルガイド</h2>
        <p>クライアント：カンタス航空</p>
        <p>担当した箇所：トップページおよび他ページのコーディング、Movable Typeでのブログ構築</p>
        <p class="url">URL：http://style.qantas.jp/style/</p>
        <ul class="click_img gallery_thumb cf">
          <li><a class="gallery02" href="<?php echo get_template_directory_uri(); ?>/images/quntas_01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/quntas_01.jpg" alt="旅のスタイルガイド" /></a></li>
          <li><a class="gallery02" href="<?php echo get_template_directory_uri(); ?>/images/quntas_02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/quntas_02.jpg" alt="旅のスタイルガイド" /></a></li>
          <li><a class="gallery02" href="<?php echo get_template_directory_uri(); ?>/images/quntas_03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/quntas_03.jpg" alt="旅のスタイルガイド" /></a></li>
          <li><a class="gallery02" href="<?php echo get_template_directory_uri(); ?>/images/quntas_04.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/quntas_04.jpg" alt="旅のスタイルガイド" /></a></li>
        </ul>
      </div>
    </div>
    <div class="row pf_box">
      <div class="c5 first">
        <img src="<?php echo get_template_directory_uri(); ?>/images/syd_01.jpg" alt="">
      </div>
      <div class="c7 last client_data">
        <h2>シドニーマラソン公式ガイド</h2>
        <p>クライアント：シドニーマラソン事務局</p>
        <p>担当した箇所：Movable Typeでのブログ構築、全ページのコーディング</p>
        <p class="url">http://www.sydneymarathon.jp/</p>
      </div>
    </div>
    <div class="row pf_box">
      <div class="c5 first gallery_big gallery03">
        <img src="<?php echo get_template_directory_uri(); ?>/images/soniqs_01.jpg" alt="SONIQS" />
      </div>
      <div class="c7 last client_data">
        <h2>レコーディングスタジオ・SONIQS(ソニックス)</h2>
        <p>クライアント：レコーディングスタジオ・SONIQS(ソニックス)</p>
        <p>担当した箇所：デザイン、全ページのコーディング</p>
        <p class="url">URL：http://www.soniqs.jp</p>
        <ul class="click_img gallery_thumb cf">
          <li><a class="gallery03" href="<?php echo get_template_directory_uri(); ?>/images/soniqs_01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/soniqs_01.jpg" alt="SONIQS" /></a></li>
          <li><a class="gallery03" href="<?php echo get_template_directory_uri(); ?>/images/soniqs_02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/soniqs_02.jpg" alt="SONIQS" /></a></li>
          <li><a class="gallery03" href="<?php echo get_template_directory_uri(); ?>/images/soniqs_03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/soniqs_03.jpg" alt="SONIQS" /></a></li>
        </ul>
      </div>
    </div>
    <div class="row pf_box">
      <div class="c5 first gallery_big gallery04">
        <img src="<?php echo get_template_directory_uri(); ?>/images/oukosher_01.jpg" alt="SONIQS" />
      </div>
      <div class="c7 last client_data">
        <h2>オーソドックスユニオン・ジャパン</h2>
        <p>クライアント：オーソドックスユニオン・ジャパン</p>
        <p>担当した箇所：デザイン、全ページのコーディング</p>
        <p class="url">URL：http://oukosher-japan.org</p>
        <ul class="click_img gallery_thumb cf">
          <li><a class="gallery04" href="<?php echo get_template_directory_uri(); ?>/images/oukosher_01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/oukosher_01.jpg" alt="SONIQS" /></a></li>
          <li><a class="gallery04" href="<?php echo get_template_directory_uri(); ?>/images/oukosher_02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/oukosher_02.jpg" alt="SONIQS" /></a></li>
          <li><a class="gallery04" href="<?php echo get_template_directory_uri(); ?>/images/oukosher_03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/oukosher_03.jpg" alt="SONIQS" /></a></li>
        </ul>
      </div>
    </div>

    <div class="row pdg-t-30">
      <div class="c12">
        <p class="font-12 pdg-b-15">現在は終了しておりますが2011年4月〜2012年4月まで東京ドームホテル様のサイト制作と運用更新を行なっておりました。<br>
        前職(〜2010年9月)のポートフォリオは<a href="http://specialsouce.com/portfolio/201010/portfolio.html">こちら <i class="icon-external-link"></i></a>をご覧ください。</p>
        <a href="#pagetop" class="right btn_magenta">Page Top</a>
      </div>
    </div>

    <footer class="row">
      <div class="c12 text-center font-10 pdg-b-30">
        Copyright © 2013 Hideaki Hosoya. All Rights Reserved.
      </div>
    </footer>

  </div><!--g960-->
  <?php include( TEMPLATEPATH . '/include/footer_js.php' ); ?>
</body>
</html>
