<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="content-language" content="ru" > <?php // TODO - в будущем генетить автоматом ?>
<?php
  //Регистрируем файлы скриптов в <head>
  if (YII_DEBUG) {
    Yii::app()->assetManager->publish(YII_PATH.'/web/js/source', false, -1, true);
  }

  Yii::app()->clientScript->registerCoreScript('jquery.project');
  Yii::app()->clientScript->registerScript('setScroll', "setAnchor();", CClientScript::POS_READY);
  $bootstrapFont = Yii::getPathOfAlias('application.assets.bootstrap.fonts') . DIRECTORY_SEPARATOR;
  Yii::app()->clientScript->addDependResource('bootstrap.min.css', array(
    $bootstrapFont.'glyphicons-halflings-regular.eot' =>  '../fonts/',
    $bootstrapFont.'glyphicons-halflings-regular.svg' =>  '../fonts/',
    $bootstrapFont.'glyphicons-halflings-regular.ttf' =>  '../fonts/',
    $bootstrapFont.'glyphicons-halflings-regular.woff' => '../fonts/',
  ));

  Yii::app()->clientScript->registerScriptFile('/themes/business/js/js.js', CClientScript::POS_HEAD);
  
  Yii::app()->clientScript->registerScript('setScroll', "setAnchor();", CClientScript::POS_READY);
  Yii::app()->clientScript->registerScript('menu.init', "$('.dropdown-toggle').dropdown();", CClientScript::POS_READY);

  Yii::app()->clientScript->registerCssFile('/themes/business/css/content.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/page.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/normalize.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/slick.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/slick-theme.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/style.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/animate.css');
  Yii::app()->clientScript->registerCssFile('/themes/business/css/jquery.fancybox.css');
?>
  <title><?php echo CHtml::encode($this->getPageTitle()); ?></title>
   <link rel="shortcut icon" href="/themes/business/img/favicon.png" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="/themes/business/js/jquery-2.2.0.min.js"></script>
    <script src="/themes/business/js/slick.min.js"></script>
    <script src="/themes/business/js/wow.min.js"></script>   
    <script src="/themes/business/js/jquery.fancybox.pack.js"></script>
    <script>
        $(document).ready(function () {
            $('a[href$=".jpg"],a[href$=".png"], a[href$=".JPG"],a[href$=".PNG"]').fancybox({type: 'image'});
        });
    </script>
     <script>
        new WOW().init();
    </script>
    <script>
        $(window).on('load', function () {
            var $preloader = $('#preloader'),
            $spinner   = $preloader.find('#preloader > div');
            $spinner.fadeOut();
            $preloader.delay(350).fadeOut(300);
        });
    </script>

  <?php if (Yii::app()->request->url == "/") {
      $body_class = "main_page";
  } else {
      $body_class = "";
  } ?> 
</head>
<body class="<?= $body_class ?>">
  <!-- <div id="wrap" class="container">
    <div id="head" class="row">
  <?php if (Yii::app()->request->url == "/"){ ?>
      <div class="logo col-md-2"><img border="0" alt="Название компании - На главную" src="/themes/business/gfx/l0000000.gif"></div>
  <?php } else { ?>
      <a href="/" title="Главная страница" class="logo col-md-2"><img src="/themes/business/gfx/l0000000.gif" alt="Логотип компании"></a>
  <?php }?>
      <div class="cname col-md-7">Ваша компания
        <p>«Слоган или вид деятельности»</p>
      </div>
      <div class="tright col-md-3">
        <div class="numbers">
          <p>+7 (495) <strong>123-45-67</strong></p>
          <p><strong>123-45-68</strong></p>
        </div>
      </div>
    </div>
    <div class="b-menu-top navbar navbar-default" role="navigation">
      <div class="collapse navbar-collapse">
  <?php
  
  if (Yii::app()->hasModule('search')) {
  $this->widget('SearchWidget');
  }
  $this->widget('MenuWidget', array(
  'rootItem' => Yii::app()->menu->all,
  'htmlOptions' => array('class' => 'nav navbar-nav'), // корневой ul
  'submenuHtmlOptions' => array('class' => 'dropdown-menu'), // все ul кроме корневого
  'activeCssClass' => 'active', // активный li
  'activateParents' => 'true', // добавлять активность не только для конечного раздела, но и для всех родителей
  //'labelTemplate' => '{label}', // шаблон для подписи
  'labelDropDownTemplate' => '{label} <b class="caret"></b>', // шаблон для подписи разделов, которых есть потомки
  //'linkOptions' => array(), // атрибуты для ссылок
  'linkDropDownOptions' => array('data-target' => '#', 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'), // атрибуты для ссылок для разделов, у которых есть потомки
  'linkDropDownOptionsSecondLevel' => array('data-target' => '#', 'data-toggle' => 'dropdown'), // атрибуты для ссылок для разделов, у которых есть потомки
  //'itemOptions' => array(), // атрибуты для li
  'itemDropDownOptions' => array('class' => 'dropdown'),  // атрибуты для li разделов, у которых есть потомки
  'itemDropDownOptionsSecondLevel' => array('class' => 'dropdown-submenu'),
  //  'itemDropDownOptionsThirdLevel' => array('class' => ''),
  'maxChildLevel' => 2,
  'encodeLabel' => false,
  ));
  
  ?>
      </div>
    </div>
  
  <?php $this->widget('BlockWidget', array("place" => SiteModule::PLACE_TOP)); ?>
  
  <?php // + Главный блок ?>
    <div id="main">
  
      <div id="container" class="row">
  <?php
  
  $column1 = 0;
  $column2 = 9;
  $column3 = 0;
  
  if (Yii::app()->menu->current != null) {
  $column1 = 3;
  $column2 = 6;
  $column3 = 3;
  
  if (Yii::app()->menu->current->getCountModule(SiteModule::PLACE_LEFT) == 0) {$column1 = 0; $column3 = 4;}
  if (Yii::app()->menu->current->getCountModule(SiteModule::PLACE_RIGHT) == 0) {$column3 = 0; $column1 = $column1*4/3;}
  $column2 = 12 - $column1 - $column3;
  if ($column2 == 12) $column2 = 9;
  }
  
  ?>
        <?php if ($column1 > 0): // левая колонка ?>
        <div id="sidebarLeft" class="col-md-<?php echo $column1; ?>">
          <?php $this->widget('BlockWidget', array("place" => SiteModule::PLACE_LEFT)); ?>
        </div>
        <?php endif ?>
        
        <div id="content" class="col-md-<?php echo $column2; ?>">
          <div class="page-header">
            <h1><?php echo $this->caption; ?></h1>
          </div>
          
          <?php if ($this->useBreadcrumbs && isset($this->breadcrumbs)): // Цепочка навигации ?>
          <?php $this->widget('BreadcrumbsWidget', array(
            'homeLink' => array('Главная' => Yii::app()->homeUrl),
            'links' => $this->breadcrumbs,
          )); ?>
          <?php endif ?>
  
          <div class="cContent">
            <?php echo $content; ?>
          </div>
          <?php $this->widget('BlockWidget', array("place" => SiteModule::PLACE_BOTTOM)); ?>
        </div>
  
        <?php if ($column3 > 0): // левая колонка ?>
        <div id="sidebarRight" class="col-md-<?php echo $column3; ?>">
          <?php $this->widget('BlockWidget', array("place" => SiteModule::PLACE_RIGHT)); ?>
        </div>
        <?php endif ?>
  
      </div>
  <?php //Тут возможно какие-нить модули снизу ?>
      <div class="clr"></div>
    </div>
  <?php // - Главный блок ?>
  
  <div id="back-top"><span>↑</span></div>
    
  </div>
  
  
  <div id="footer" class="container">
    <div class="row">
      <div class="col-md-4 logo">
        <img alt="Логотип компании" src="/themes/business/gfx/l0000000.gif">
      </div>
      <div class="col-md-6">
        <?php $this->widget('BlockWidget', array("place" => SiteModule::PLACE_FOOTER)); ?>
      </div>
    </div>
  </div> <!-- -->
<div id="preloader">
    <div><img src="/themes/business/img/preloader.png" alt="Preloader"></div>
</div>
<div id="wrapper">
  <div class="top_line">
      <div class="container">
          <span> (032) 252-30-41</span><span>(068) 535-45-45</span><span>lkplev@gmail.com</span>
          <ul class="social_top">
              <li><a href="https://www.facebook.com/lvivlkplev" class="fb"></a></li>
              <!-- <li><a href="#" class="vk"></a></li> -->
              <li><a href="#" class="yt"></a></li>
          </ul>
      </div>
  </div>
  <header>
      <div class="container">
          <a href="<?php // Url::home(); ?>" id="logo"><img src="/themes/business/img/logo.png" alt="logo"></a>
          <div class="site_discription">Служба відлову та Ветеринарно-стерилізаційний центр для безпритульних тварин
Перша Комунальна Ветеринарна Клініка. <br>
Центр реєстрації тварин.</div>
          <a href="<?php // Url::toRoute('site/animal_registration');?>" class="h_btn">ЗАРЕЄСТРУВАТИ</a><a href="take_care.html" class="pointereventsnone h_btn">ПРИХИСТІТЬ</a>
          <a href="#" class="pointereventsnone h_btn translation">Онлайн транслція з ЛКП "ЛКВ"</a>
          <div id="menu">
              <ul>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'about_mission']);?>">ПРО НАС</a></li>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'clinic']);?>">КЛІНІКА</a></li>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'our_projects']);?>">НАШІ ПРОЕКТИ</a></li>
                  <li><a class="br" href="#">ВІДЛОВЛЕНІ<br /> ТВАРИНИ</a></li>
                  <li><a href="#">Новини</a></li>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'good_to_know']);?>">Цікаво знати</a></li>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'partners']);?>">Партнери</a></li>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'video']);?>">Відео</a></li>
                  <li><a href="#">Журналістам</a></li>
                  <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'contact']);?>">Контакти</a></li>
              </ul>
              <div class="clear"></div>
          </div>
      </div>
  </header>


 <?= $content ?>
<footer>
  <div class="bottom_menu">
      <ul>
          <li><a href="<?php // Url::home() ?>">Головна</a></li>
          <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'about_mission']);?>">Про нас</a></li>
          <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'clinic']);?>">Клініка</a></li>
          <li><a href="#">Прихистіть</a></li>
          <li><a class="br" href="#">Відловлені тварини</a></li>
          <li><a href="#">Новини</a></li>
          <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'good_to_know']);?>">Цікаво знати</a></li>
          <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'partners']);?>">Партнери</a></li>
          <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'video']);?>">Відео</a></li>
          <li><a href="#">Журналістам</a></li>
          <li><a href="<?php // Url::toRoute(['site/pages','alias'=>'contact']);?>">Контакти</a></li>
      </ul>
  </div>
  <div class="footer_middle">
      <div class="container">
          <ul class="phone">
              <li><span style="line-height: 21px;display: block;position: relative;top: 10px;">(032) 252-30-41 <br>
              (068) 535-45-45</span></li>
              <li>lkplev@gmail.com</li>
          </ul>
          <ul class="social_bottom">
              <li><a href="https://www.facebook.com/lvivlkplev" class="fb"><img src="/themes/business/img/footer_fb.png" alt="fb"></a></li>
              <!-- <li><a href="#" class="vk"><img src="img/footer_vk.png" alt="vk"></a></li> -->
              <li><a href="#" class="yt"><img src="/themes/business/img/footer_yt.png" alt="yt"></a></li>
          </ul>
          <div class="location">
              м.Львів, вул. Промислова 56
          </div>
      </div>
  </div>
  <div class="footer_bottom">
      <div class="container">
          <span class="rights">All rights reserved © <?= date('Y') ?></span>
          <div class="wemes">Створення сайту: <a href="http://wemes.com.ua/" target="_blank" data-hover="Рекламна агенція WEMES">Рекламна агенція WEMES</a></div>
      </div>
  </div>
</footer>
</div>
<script>
        $('.main_slider > div').slick({
            dots: true,
            arrows: false,
            autoplay: false,
            autoplaySpeed:2500,
            speed: 500,
        });
        $('.about_slider').slick({
            arrows: true,
            autoplay: true,
            autoplaySpeed:2500,
            speed: 500,
        });
        $('.tc_slider > ul').slick({
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            variableWidth: true,
            autoplay: false,
            autoplaySpeed:2500,
            speed: 350,
            draggable: false
        });
        $('.part_slider > ul').slick({
            arrows: true,
            autoplay: true,
            autoplaySpeed:2500,
            speed: 500,
            slidesToShow: 6,
            slidesToScroll: 1,
            draggable: false
        })
    </script>
</body>
</html>