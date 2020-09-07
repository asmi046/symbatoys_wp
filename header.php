<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><? wp_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    
    <link rel="icon" type="image/png" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="<? echo get_template_directory_uri();?>/img/icon/logo.svg"> 

    <?php wp_head();?> 
	
</head> 
<body>

<!-- Скрипт для вывода яндекс карт Подключать непосредственно перед вызовом скрипта инициализации карты-->
<!-- <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> -->

<!-- Меню -->
<?php //wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>

<!-- Подключение  модальных окон-->
<? include "modal-win.php";?>


	<header id="header" class="header">
	<div class="container">
		<div class="header__row">
		<!-- Обертка Всей Шапки -->
      <div class="header-top">
				
				<div class="header-top__menu-contact">
      	<!-- Блок Иконок: Курск-Доставка-Акции -->
        <div class="header-top__menu ul-clean">
          <a href="#" class="header-top-icon header-top__map">Курск</a>
          <a href="#" class="header-top-icon header-top__delivery">Доставка</a>
          <a href="#" class="header-top-icon header-top__actions">Акции</a>
		</div>

        <!-- Телефон -->
        <a href="tel:88005110179" class="header-phone">8 800 511-01-70</a>

        </div>
      
      <!-- Блок Логотипа и Меню -->
      <div class="header-middle">
        <!-- Блок logo -->
        <div class="header-block-logo">
         <a href="#" class="header-block-logo__svg"></a>
        </div>
        
        <!-- Блок Заголовка и Форма поиска -->
        <div class="header-search">
          <!-- Блок Заголовка -->
          <div class="header-title">
            <h1 class="header-title__text">
              Магазин развивающих игрушек №1 в России
            </h1>
          </div>

          <!-- Форма поиска -->
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
            <input type="text" value="" placeholder="Поиск" name="s" id="s" />
            <!-- <input type="submit" id="searchsubmit" class="searchsubmit" value="" /> -->
            <a href="#" class="sub-search"></a>
          </form>
        </div>
        
        <!-- Блок Кабинет Корзина -->
        <div class="header-user">
          <a href="#" class="header-user__btn header-user__user">Кабинет</a>
          <a href="#" class="header-user__btn header-user__cart">Корзина</a>
        </div>
      </div>
      
        <!-- Меню Основное -->
        <? get_template_part( 'template-parts/menu', "part"); ?>

		</div>
	</div>
</header>