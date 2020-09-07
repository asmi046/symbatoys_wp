

<footer id="footer" class="footer">
	<div class='container'>
		<div class="footer__row">
		<div class="footer-block footer-block__req">
        <div class="footer-left-title"><? echo carbon_get_theme_option( 'st_caompany' ); ?></div>
        <div class="footer-left-title">ИНН: <? echo carbon_get_theme_option( 'st_inn' ); ?></div>
        <div class="footer-left-title">ОГРН: <? echo carbon_get_theme_option( 'st_ogrn' ); ?></div>
        <div class="footer-left-title"><a href="#">Политика конфиденциальности</a></div>
        <div class="footer-left-title"><a href="#">Разработка сайта Asmi-Studio.ru</a></div>
      </div>
      <ul class="footer-block footer-menu ul-clean">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Доставка</a></li>
        <li><a href="#">Акции</a></li>
        <li><a href="#">Обмен / возврат</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">Отзывы</a></li>
        <li><a href="#">Опт и сотрудничество</a></li>
      </ul>
      <div class="footer-block footer-block__pay">
        <div class="footer-block__title">Способы оплаты</div>
        <p class="footer-block__subtitle">Вы можете оплатить покупки наличными при получении, <br> либо онлайн.</p>
      </div>
      <div class="footer-block footer-block__contacts">
        <p>Звоните в любой день <? echo carbon_get_theme_option( 'st_worktime' ); ?></p>
        <p>Заказывайте через сайт в любое время суток!</p>
        <a href="tel:<?$phoneF = carbon_get_theme_option( 'st_phone' ); echo preg_replace('/[^0-9]/', '', $phoneF);?>" class="footer-phone"><? echo $phoneF; ?></a>
        <p>Бесплатный звонок по России</p>
      </div>
		</div>
	</div>
</footer>	

<?php wp_footer(); ?>

</body>
</html>